<?php

namespace App\Repositories\Sysdef;

use App\Models\Information\Forum;
use App\Models\Information\News;
use App\Models\Sysdef\Region;
use App\Repositories\BaseRepository;
use App\Repositories\Business\CommodityRepository;
use App\Repositories\Business\OfferRepository;
use App\Repositories\Business\TenderRepository;
use App\Repositories\Information\AnnouncementRepository;
use App\Repositories\Information\EventRepository;
use App\Repositories\Information\ForumRepository;
use App\Repositories\Information\NewsRepository;
use App\Repositories\Information\PollRepository;
use App\Repositories\Information\SurveyRepository;
use App\Repositories\Service\AdRepository;
use App\Repositories\Stakeholder\ReminderRepository;
use Carbon\Carbon;
use Voerro\Laravel\VisitorTracker\Facades\VisitStats;

class HomeRepository extends BaseRepository
{
    protected $commodities;
    protected $news;
    protected $forums;
    protected $events;
    protected $announcements;
    protected $tenders;
    protected $offers;
    protected $poll_repo;
    protected $survey_repo;

    public function __construct()
    {
        $this->commodities = new CommodityRepository();
        $this->news = new NewsRepository();
        $this->forums = new ForumRepository();
        $this->events = new EventRepository();
        $this->announcements = new AnnouncementRepository();
        $this->tenders = new TenderRepository();
        $this->offers = new OfferRepository();
        $this->poll_repo = new PollRepository();
        $this->survey_repo = new SurveyRepository();
    }

    /**
     * @return mixed
     * Get all recent info for home page
     */
    public function latestInfo()
    {
        /*information center*/
        $news = $this->news->getLatestNews(8);
        $forums = $this->forums->getLatestThreads(8);
        $events = $this->events->getLatest(8);
        $announcements = $this->announcements->getLatest(8);
        /*Business*/
        $transport_cargoes = $this->tenders->getTransportCargoLatest(8);
        $transport_offers = $this->offers->getTransportOffersLatest(8);
        $commodities = $this->commodities->getAllLimit(10);
        $visitor_stats_summary = $this->visitorStatsSummary();
        $polls = $this->poll_repo->getLatestActivePollForHomepage(2);
        $surveys = $this->survey_repo->getLatestActiveSurveysForHomepage(2);
        return [
            'latest_commodities' => $commodities,
            'latest_news' => $news,
            'latest_forums' => $forums,
            'latest_events' => $events,
            'latest_announcements' => $announcements,
            'latest_transport_cargoes' => $transport_cargoes,
            'latest_transport_offers' => $transport_offers,
            'visitor_stats' => $visitor_stats_summary,
            'polls' => $polls,
            'surveys' => $surveys
        ];
    }

    public function getRegionById($id)
    {
        $region = $this->query()->where('id', $id)->first();
        return $region;
    }


    /**
     * @return array
     * Get all reminders which need to be displayed on home page
     */
    public function getReminders()
    {
        $company_reminders = (new ReminderRepository())->companyRegistration();

        return ['company_registration' => $company_reminders];
    }


    /**
     * Get visitor summary on home page
     */
    public function visitorStatsSummary()
    {
        $visits1w = VisitStats::query()->visits()
            ->except(['ajax', 'bots'])
            ->period(Carbon::now()->subDays(7))->unique()->count();

        $visits1m = VisitStats::query()->visits()
            ->except(['ajax', 'bots'])
            ->period(Carbon::now()->subMonth(1))->unique()->count();;

        $visits1y = VisitStats::query()->visits()
            ->except(['ajax', 'bots'])
            ->period(Carbon::now()->subYears(1))->unique()->count();;

        $total_unique = VisitStats::query()->visits()->except(['ajax', 'bots'])->unique()->count();
        $online_now = VisitStats::query()->visits()
            ->except(['ajax', 'bots'])
                       ->period(Carbon::now()->subMinutes(30))->unique()->count();


        return ['this_week'   => $visits1w, 'this_month' => $visits1m, 'this_year' => $visits1y, 'total_unique' => $total_unique, 'online_now' => $online_now ];

    }


}
