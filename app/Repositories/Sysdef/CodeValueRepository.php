<?php

namespace App\Repositories\Sysdef;

use App\Models\Sysdef\CodeValue;
use App\Repositories\BaseRepository;
use App\Repositories\Package\PackageRepository;
use App\Repositories\Stakeholder\AssociationsRepository;
use App\Repositories\Stakeholder\CompanyRepository;
use App\Repositories\Sysdef\CountryRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;
use Spatie\TranslationLoader\LanguageLine;

/**
 * Class CodeValueRepository
 * @package App\Repositories\Sysdef
 * @description Use this class with care, could break the system.
 * Controls all the data dictionaries of the system.
 * @author Erick M. Chrysostom <e.chrysostom@nextbyte.co.tz>
 */
class CodeValueRepository extends BaseRepository
{
    const MODEL = CodeValue::class;

    protected $code_repo;
    protected $language_lines;

    /*
     * CodeValueRepository Constructor
     */
    public function __construct(){
        $this->code_repo = new CodeRepository();
        $this->language_lines = new LanguageLineRepository();
    }

    /*Query only active code values*/
    public function queryActive(){
        return $this->query()->where('isactive',1);
    }

    /*
     * Translate CodeValues Entries using lang>code_value
     */
    public function mapIdsForLang($query)
    {
        $return = $query->map(function ($item, $key) {
                        return ['id' => $item['id'], 'name' => __("code_value." . $item['id'])];
        });
        return $return;
    }

    /**
     * Get code value name for translation
     * @param $id
     * @return array|null|string
     */
    public function name($id)
    {
        return __('code_value.'. $id);
    }


    /**
     * Get code value description for translation
     * @param $id
     * @return array|null|string
     */
    public function description($id)
    {
        return __('code_value_description.'. $id);
    }

    /*
     *
     */
    public function getUserLogTypeLogIn()
    {
        $return = $this->queryActive()->select(['id'])->where("code_id", 3)->where("reference", "ULLGI")->first();
        return $return->id;
    }

    /*
     *
     */
    public function getUserLogTypeLogOut()
    {
        $return = $this->queryActive()->select(['id'])->where("code_id", 3)->where("reference", "ULLGO")->first();
        return $return->id;
    }

    /*
     *
     */
    public function getUserLogTypeFailedLogin()
    {
        $return = $this->queryActive()->select(['id'])->where("code_id", 3)->where("reference", "ULFLI")->first();
        return $return->id;
    }

    /*
     *
     */
    public function getUserLogTypePasswordReset()
    {
        $return = $this->queryActive()->select(['id'])->where("code_id", 3)->where("reference", "ULPRS")->first();
        return $return->id;
    }

    /*
     *
     */
    public function getUserLogTypeUserLockout()
    {
        $return = $this->queryActive()->select(['id'])->where("code_id", 3)->where("reference", "ULULC")->first();
        return $return->id;
    }

    /*
     *
     */
    public function getPortalUserForSelect()
    {
        $query = $this->queryActive()->select(['id'])->where("code_id", 1)->whereIn("id", [2, 3, 4])->get();
        $return = $this->mapIdsForLang($query)->pluck('name', 'id');
        return $return;
    }

    public function getInvitationUserForSelect()
    {
        $query = $this->queryActive()->select(['id'])->where("code_id", 1)->whereIn("id", [2, 3, 6])->get();
        $return = $this->mapIdsForLang($query)->pluck('name', 'id');
        return $return;
    }

    /*
     *
     */
    public function getCodeForSelectFiltered($code_id, array $filter)
    {
        $query = $this->queryActive()->select(['id'])->where("code_id", $code_id)->whereIn("id", $filter)->get();
        $return = $this->mapIdsForLang($query)->pluck('name', 'id');
        return $return;
    }

    /*
     * Get all code values by code_id
     * For initiating chained selects
     */
    public function getAllByCode($code_id)
    {
        return $this->queryActive()->select(['id', 'values', 'code_id', 'reference'])->where("code_id", $code_id)->get();
    }

    /*
     *
     */
    public function getCodeForSelect($code_id)
    {
        $query = $this->queryActive()->select(['id'])
            ->where("code_id", $code_id)
            ->orderBy('id', 'asc')
            ->get();
        $return = $this->mapIdsForLang($query)->pluck('name', 'id');
        return $return;
    }

    /*Get code values by code ascended by sort*/
    public function getCodeForSelectSortAsc($code_id)
    {
        $query = $this->queryActive()->select(['id'])
            ->where("code_id", $code_id)
            ->orderBy('sort', 'asc')
            ->get();
        $return = $this->mapIdsForLang($query)->pluck('name', 'id');
        return $return;
    }


    /*
     *
     */
    public function getCodeValuesByReferenceForSelect($id)
    {
        $query = $this->queryActive()->select(['values', 'reference', 'id'])->where("code_id", $id)->get();
//        $return = $query->pluck("values", "reference");
//        $return = $this->mapIdsForLang($query)->pluck('name', 'reference');
        return $query;
    }


    /**
     * Get CV by reference
     * @param $reference
     * @return mixed
     */
    public function getCodeValueByReference($reference){
        return $return = $this->queryActive()->where("reference", $reference)->first();
    }

    /*
     *
     */
    public function getCodeValues($code_id)
    {
        return $this->queryActive()->where("code_id", $code_id)->get();
    }

    /*
     * Get instances of all logistic services for tendering - Business center
     */
    public function getCodeValuesNotIn($code_id, array $id)
    {
        return $this->queryActive()->where("code_id", $code_id)->whereNotIn('id', $id)->get();
    }

    /*
     *
     */
    public function getCodeValuesPaginate($code_id, $count = 10)
    {
        return $this->queryActive()->where("code_id", $code_id)->paginate(sysdef()->name('pagination_low'));
    }

    /*
     *
     */
    public function getCurrencyForSelect(){
        $repo = new CurrencyRepository();
        $query = $repo->query()->select(['id', 'code'])->get();
        $return = $query->pluck("code", "id");
        return $return;
    }


    /*
     *
     */
    public function getActiveCompanyForSelect(){
        $repo = new CompanyRepository();
        $query = $repo->query()->get();
        $return = $query->pluck("name", "id");
        return $return;
    }


    /*
     *
     */
    public function getCountryForSelect()
    {
        $repo = new CountryRepository();
        $query = $repo->query()->select(['code', 'name'])->get();
        $return = $query->pluck("name", "code");
        return $return;
    }

    /*
     *
     */
    public function getCountryIdsForSelect()
    {
        $repo = new CountryRepository();
        $query = $repo->query()->select(['id', 'name'])->get();
        $return = $query->pluck("name", "id");
        return $return;
    }

    /*
     *
     */
    public function getRegionForSelect()
    {
        $repo = new RegionRepository();
        $query = $repo->query()->select(['id', 'name'])->get();
        $return = $query->pluck("name", "id");
        return $return;
    }








    /*
     * Get code values by code for data table
     */
    public function getCodeValuesByCodeForDataTable($code_id){
        return $this->query()->where('code_id', $code_id);
    }


    /*Get Logistic service for tenders for select*/
    public function getPrimaryLevelPackages()
    {
        $repo = new PackageRepository();
        $query = $repo->query()->get();
        return $query;
    }





    public function getMaxSort($code_id){
        $code_values = $this->query()->select('sort')
            ->where('code_id', $code_id)
            ->orderBy('sort', 'desc')
            ->first();
        return $code_values->sort;
    }

    /**
     * generate references for CodeValue
     * @param $initials
     * @return string
     */
    public function generateReference($initials){
        do
        {
            $token = randomString();
            $reference = $initials.$token;
            $available = $this->query()
                ->select('reference')
                ->where('reference', $reference)->get();
        }
        while(!$available->isEmpty());
        return $reference;
    }


    /**
     * Get subcategory code of the code value
     * @param $cv_id
     * @return mixed
     */
    public function getCodeCategory($cv_id)
    {
        $code_value = $this->find($cv_id);
        $code_category = $code_value->codes()->where('iscategory', 1)->first();
        return $code_category;
    }

    /**
     * Store Code Value
     * @param array $input
     * @param $code
     */
    public function store(array $input, $code){
        $status = $input['status'];
        $isactive = 0;

        if($status == 'yes'){
            $isactive = 1;
        }

        $sort = $this->getMaxSort($code->id);

        DB::transaction(function () use ($input, $isactive, $sort, $code) {
            $max = $this->query()->select('id')->orderBy('id', 'desc')->limit(1)->first();
            $id = $max->id + 1;
            $query = $this->query()->create([
                'id' => $id,
                'code_id' => $code->id,
                'name' => ucfirst($input['code_name']),
                'description' => $input['description'],
                'reference' => $this->generateReference('FT'),
                'sort' => ++$sort,
                'isactive' => $isactive,
            ]);

            //save language 'key' => 'text'
            LanguageLine::create([
                'group' => 'code_value',
                'key' => $id,
                'text' => ['en' => ucfirst($input['code_name']), 'sw' => ucfirst($input['code_name_sw'])],
            ]);

            return $query;
        });
    }

    /**
     * @param array $input
     * @param $reference
     */
    public function update(array $input, $code_value){
        $status = $input['status'];
        $isactive = 0;

        if($status == 'yes'){
            $isactive = 1;
        }

        DB::transaction(function () use ($input, $isactive, $code_value) {
            $query = $this->find($code_value);
            $query->name = ucfirst($input['code_name']);
            $query->description = $input['description'];
            $query->isactive = $isactive;
            $query->update();

            $lang_query = $this->language_lines->getByKey($query->id);
            $lang_query->text = ['en' => ucfirst($input['code_name']), 'sw' => ucfirst($input['code_name_sw'])];
            $lang_query->update();

            return $query;
        });
    }

    /*Deactivate code values*/
    public function deactivate(Model $code_value)
    {
        $code_value->update([
            'isactive' => 0
        ]);
    }

/*Activate*/
    public function activate(Model $code_value)
    {
        $code_value->update([
            'isactive' => 1
        ]);
    }
    /**
     * a function that relates a code value id with the font-awesome icon
     */
    public function cvIcon($id)
    {
        switch ($id) {
            case 129: {
                //vehicles
                $icon = '<i class=" fas fa-truck"></i>';
            }; break;
            case 130: {
                //containers
                $icon = '<i class="fas fa-archive"></i>';
            }; break;

            case 135: {
                //truck
                $icon = '<i class=" fas fa-truck"></i>';
            }; break;
            case 136: {
                //truck head
                $icon = '<i class="fas fa-truck-moving"></i>';
            }; break;
            case 137: {
                //truck trailer
                $icon = '<i class="fas fa-truck-loading"></i>';
            }; break;
            case 138: {
                //Auto spare parts
                $icon = '<i class="fas fa-cogs"></i>';
            }; break;

            case 266: {
                //container handlers
                $icon = '<i class="fas fa-truck-loading"></i>';
            }; break;

            default: {
                //others
                $icon = '<i class="fas fa-angle-right"></i>';
            }
        }

        return $icon;
    }


    /*Get instances of all active payment period in service package subscription------*/
    public  function queryActivePaymentPeriod()
    {
        return $this->queryActive()->select(['id','name'])->where("code_id", 35)->whereNotIn('id',[189,190,191,192,193,194,195,196,197])->get();
    }

}
