<?php
namespace App\Repositories\Information;

use App\Events\Sockets\Notification\NewsCreated;
use App\Jobs\Notifications\SendPostedNewsEmail;
use App\Jobs\Notifications\SendSms;
use App\Models\Information\News;
use App\Notifications\Information\CreatedNewsNotification;
use App\Repositories\Access\UserRepository;
use App\Repositories\BaseRepository;
use App\Repositories\Sysdef\CodeValueRepository;
use App\Repositories\Sysdef\DocumentRepository;
use App\Services\Notifications\UserForNewsNotification;
use App\Services\Storage\Traits\AttachmentHandler;
use App\Services\Storage\Traits\FileHandler;
use Illuminate\Support\Facades\DB;


class NewsRepository extends BaseRepository
{

    use AttachmentHandler, FileHandler;

    const MODEL = News::class;

    protected $code_value;
    protected $base = null;
    protected $service;


    public function __construct()
    {
        $this->code_value = new CodeValueRepository();
    }



    /**
     * Get all news for datatable
     */
    public function getForAdminDatatable()
    {
        $news = $this->query()->select([
            DB::raw("concat_ws(' ', users.name, users.othernames) as posted_by"),
            DB::raw("news.title"),
            DB::raw("code_values.name as category"),
            DB::raw("news.content"),
            DB::raw("news.source"),
            DB::raw("news.islocal"),
            DB::raw("news.created_at"),
            DB::raw("news.uuid"),
        ]) ->join("users", "users.id", "=", "news.user_id")
            ->leftJoin("code_values", "code_values.id", "=", "news.logistic_service_cv_id")->orderBy('news.id', 'desc');
        return $news;
    }

    /**
     * used on news.search page
     * @return mixed
     */
    public function getAll(){
        $query = $this->query()
            ->orderBy('id', 'desc')
            ->paginate(4);
        return $query;
    }

    public function getAllForHomePage()
    {
        $query = $this->query()
            ->orderBy('id', 'desc')
            ->paginate(3);
        return $query;
    }

    public function getMostViewed(){
        $query = $this->query()
            ->orderBy('views', 'desc')
            ->paginate(5);
        return $query;
    }

    public function getOneBySlug($slug){
        $query = $this->query()
            ->where('slug',$slug)->get()->first();
        return $query;
    }





    public function queryGetGeneralNews()
    {
        return $this->query()->whereNull('logistic_service_cv_id');
    }
    /**
     * Get general news
     * @return mixed
     */
    public function getGeneralNews(){
        $query = $this->queryGetGeneralNews()
            ->orderBy('id', 'desc')
            ->paginate(sysdef()->name('pagination_low'));
        return $query;
    }





    /**
     * Display latest $limit news on homepage
     * @param $limit
     * @return mixed
     */
    public function getLatestNews($limit){
        $query = $this->query()
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
        return $query;
    }

    /**
     * @param $keyword
     * @return mixed
     * Get news using keyword submitted
     */
    public function getAllByKeyword($keyword){
        $query = $this->query()
            ->where(function($query) use($keyword){
                $query->where('title','~*', $keyword)->orWhere('content','~*', $keyword);
            })
            ->orderBy('id', 'desc')
            ->paginate(sysdef()->name('pagination_low'));
        return $query;
    }
}
