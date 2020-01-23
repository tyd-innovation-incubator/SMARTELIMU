<?php
//$users = \App\Models\Tasks\Task::with(['user' => function($q){
//    $q->where('name', 'Supervisor');
//}])->get();


//$users = \Illuminate\Support\Facades\DB::table('users')
////    ->join('roles', function ($join) {
////        $join->where('roles.id',2);
////    })
////    ->get();
//
//
//$user = access()->user();
////$task = \App\Models\Tasks\Task::find(63);
////$system_user = $task->whereHas('user',function ($p,$user){
////    $p->where('user_id',$user->id);
////})
////    ->whereHas('roles', function ($q) {
////    $q->where('role_id', '<>', 2);
////})->get();
////DB::table('users')
////    ->join('contacts', function($join)
////    {
////        $date = date('Y-m-d');
////        $join->on('users.id', '=', 'contacts.user_id');
////    })
////    ->where('contacts.effective_date', '>=', $date);
////->get();
//
//$users = \Illuminate\Support\Facades\DB::table('tasks')
////    ->select([
////        \Illuminate\Support\Facades\DB::raw('tasks.description as description'),
////                \Illuminate\Support\Facades\DB::raw('tasks.uuid as uuid')
////
////    ])
////    ->join('users', 'users.id', '=', 'tasks.allocate_user_id')
////    ->join('role_user', 'role_user.user_id', '=', 'users.id')
////    ->join('roles', 'roles.id', '=', 'role_user.role_id')
//    ->whereNotIn('task_status_cv_id',[12,13,14,15])
//   ->get();
//
//$date = \Carbon\Carbon::today()->subDays(7);
//
//
//$no_of_hours = \Illuminate\Support\Facades\DB::table('tasks')
//    ->where('user_id',access()->user()->id)
//    ->whereNull('completed_date')
//    ->get();

//access()->user()->notify(new \App\Notifications\Task\SendTaskToAllocatedUserNotification($task));

//$task =(new \App\Repositories\Task\TaskRepository())->getAllCompletedTasksByUser(access()->user()->id);
//dd( \PhpParser\Node\Expr\AssignOp\Div::class('btn')
//);

    $user = access()->user();
    \Illuminate\Support\Facades\Mail::to($user)->send(new \App\Mail\ConfirmOrder());
