<?php

namespace App\Repositories\Access;

use App\Notifications\UserConfirmationNotification;
use App\Repositories\BaseRepository;
use App\Repositories\Sysdef\CountryRepository;
use App\User;
use Propaganistas\LaravelPhone\PhoneNumber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;

class UserRepository extends BaseRepository
{
    const MODEL = User::class;

    protected $staffs;
    protected $countries;


    public function __construct()
    {
        $countries = new CountryRepository();
    }


    public function create(array $input)
    {

        return DB::transaction(function () use ($input) {
            /*Save user info to user table*/
            $user = $this->saveUser($input);

            //Register user account type
//            $user->userAccounts()->attach($input['user_account_cv_id']);
//            $this->attachAccounts($user, $input);

//            //Attach Premium Role, to be changed to Free Role when become live //TODO: SHOULD BASE ON ACCOUNT TYPE
//            $role = $this->getRoleByUserAccountType($input['user_account_cv_id']);
//            $user->attachRole($role);
//
//            /*Attach Permissions based on roles attached*/
//            $this->attachRolePermissions($user);
//
//            $this->registrationNotification($user);

            return $user;
        });


    }

//    /**
//     * @param $user_account_type
//     * Get role by user account type when user register
//     */
//    public function getRoleByUserAccountType($user_account_type)
//    {
//        foreach ($user_account_type as $key => $value) {
//            switch ($key)  {
//                case 'user_account_cv_id':
//
//                    /*Get role*/
//                    switch ($value){
//                        case 2:
//                        case 3:
//                        case 4:
//                            $role = 2;
//                            break;
//                        case 6:
//                            $role = 7;
//                            break;
//                        default:
//                            $role = 2;
//                            break;
//                    }
//
//
//                    break;
//            }
//        }
//
//
//        return $role;
//
//    }
//
//    /**
//     * @param Model $user
//     * Send registration notification via email
//     */
//    public function registrationNotification(Model $user)
//    {
//        /* Send confirmation email */
//        $user->notify(new UserNeedsConfirmation());
//
//        /* Send Welcome SMS */
//        SendSms::dispatch($user, trans("strings.sms.registered")  .$user->confirmation_code);
//    }


    /**
     * @param array $input
     * @return mixed
     * @throws GeneralException
     */
    public function saveUser(array $input)
    {
        $data = ['email' => $input['email'], 'phone' => PhoneNumber::make($input['phone'],'TZ')->formatE164()];
        $this->checkIfPhoneIsUnique($data['phone'], 'phone', 1, null);
        $user = DB::transaction(function () use ($input, $data) {
            $input['password'] = bcrypt($input['password']);
            $user = $this->query()->create([
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'username' => $input['username'],
                'gender' => $input['gender'],
                'category_cv_id' => $input['account_category'],
                'phone' => $data['phone'],
                'email' => $input['email'],
                'country_id' => $input['country'],
                'region_id' => $input['region'],
                'password' => $input['password'],
                'confirmation_code' => mt_rand(100000,999999),
                'roles' =>2,
            ]);

            $user->notify(new UserConfirmationNotification());
            return $user;

        });

        return $user;
    }



    /*Attach accounts when registering user */
    public function attachAccounts(Model $user, $input){
        /*Re sync*/
        $account_array = [];
        foreach ($input as $key => $value) {
            switch ($key)  {
                case 'user_account_cv_id':
                    $account_array = $value;
                    break;
            }
        }
        /*Remove Forum user if Service provider and cargo owner exist in array*/
        if ((in_array('2', $account_array) || in_array('3', $account_array)) && in_array('4', $account_array)){
            $pos = array_search('4', $account_array);
            unset($account_array[$pos]);
        }
        $user->userAccounts()->sync($account_array);
    }



    /* Update user information */
    public function update(array $input, Model $user)
    {
        return DB::transaction(function () use ($input,$user) {
            /*Update user info to user table*/
            $user = $this->updateUser($input, $user);
            $this->attachAccounts($user, $input);
            return $user;
        });
    }

    /**
     * @param array $input
     * @param Model $user
     * @return mixed
     * Update user info to user table
     */
    public function updateUser(array $input, Model $user){
        $data = ['email' => $input['email'], 'phone' => PhoneNumber::make($input['phone'],'TZ')->formatE164()];
        $this->checkIfPhoneIsUnique($data['phone'], 'phone', 1, null);
        return DB::transaction(function () use ($input, $data,$user) {
            $user->update([
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'username' => $input['username'],
                'gender' => $input['gender'],
                'address' => $input['address'],
                'category_cv_id' => $input['account_category'],
                'phone' => $data['phone'],
                'email' => $input['email'],
                'password' => $input['password'],
                'confirmation_code' => mt_rand(100000,999999),
                'roles' =>2,
            ]);

            return $user;
        });

    }





    public function saveUserFromWelcome(array $input)
    {
        $data = ['email' => $input['email'], 'phone' => PhoneNumber::make($input['phone'],'TZ')->formatE164()];
        $this->checkIfPhoneIsUnique($data['phone'], 'phone', 1, null);
        $user = DB::transaction(function () use ($input, $data) {
            $input['password'] = bcrypt($input['password']);
            $user = $this->query()->create([
                'first_name' => $input['first_name'],
                'phone' => $data['phone'],
                'email' => $input['email'],
                'password' => $input['password'],
                'confirmation_code' => mt_rand(100000,999999),
                'roles' =>2,
            ]);

            $user->notify(new UserConfirmationNotification());
            return $user;

        });

        return $user;
    }

    /*Create system user */
    public function createCandidate(array $input)
    {
        $user = access()->user();
        $candidate = DB::transaction(function () use ($input,$user) {
            $candidate = $user->candidates()->create([
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'className' => $input['class_name'],
                'yearOfStudy' => $input['year_of_study'],
                'DOB' => $input['date_of_birth'],
                'gender' => $input['gender'],
                'nationality' => $input['country'],
                'user_id' =>$user->id,

            ]);

            return $candidate;
        });
        return $candidate;
    }



    /* Update system user information */
    public function updateCandidate(array $input,$candidate)
    {
        $user = access()->user();
        return DB::transaction(function () use ($user,$input, $candidate) {
            $candidate = $candidate->update([
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'className' => $input['class_name'],
                'yearOfStudy' => $input['year_of_study'],
                'DOB' => $input['date_of_birth'],
                'gender' => $input['gender'],
                'nationality' => $input['country'],
                'user_id' =>$user->id,
            ]);
            return $candidate;
        });

    }



    /**
     * @param array $input
     * @param Model $user
     * Attach roles to user from the form submitted
     */
    public function attachRoles(array $input, Model $user){
        $role_array = [];
        foreach ($input as $key => $value) {
            switch ($key)  {
                case 'roles':
                    $role_array = $value;
                    break;
            }
        }
        $user->roles()->sync($role_array);

    }

    /**
     * @param Model $user
     * Attach permissions based on roles attached to the user
     */
    public function attachRolePermissions(Model $user)
    {
        $array = [];
        $permissions = [];
        $roles = $user->roles;
        foreach($roles as $role){
            $array = $role->permissions()->pluck("permissions.id")->all();
//            $array = $permissions;
            $permissions = array_merge($array, $permissions);
        }

        $user->permissions()->sync($permissions);

    }


    /**
     * @param array $input
     * @return mixed
     * Change Password of contact person /portal user.
     */
    public function changePassword(array $input, User $user)
    {
        $user->update(['password' => bcrypt($input['password'])]);
        return $user;
    }



    /**
     * @param $token
     * @return mixed
     */
    public function findByConfirmationToken($token)
    {
        return $this->query()->where('confirmation_code', $token)->first();
    }

    public function confirmAccount($token)
    {
        $user = $this->findByConfirmationToken($token);
        if ($user->confirmed == 'true') {
            throw new GeneralException(__('exceptions.auth.confirmation.already_confirmed'));
        }

        if ($user->confirmation_code == $token) {
            $user->confirmed = 't';
            $user->save();
            return access()->login($user);
        }
        throw new GeneralException(trans('exceptions.auth.confirmation.mismatch'));
    }

    public function getName($id){
        $user = $this->query()->select('name')->where('id',$id)->first()->name;
        return $user;
    }












}
