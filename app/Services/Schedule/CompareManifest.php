<?php
/**
 * Created by PhpStorm.
 * User: hamis
 * Date: 5/29/19
 * Time: 9:41 AM
 */

namespace App\Services\Schedule;


use App\Repositories\Application\ApplicationRepository;
use App\Repositories\Manifest\ManifestRepository;

class CompareManifest
{
    protected $application;

    protected $manifest;

    /**
     * Manifest constructor.
     * @throws \App\Exceptions\GeneralException
     */
    public function __construct()
    {
        $this->application = (new ApplicationRepository());
        $this->manifest = (new ManifestRepository());
    }

    public function check()
    {

        $applications = $this->application->getAllApplicationsWhichDoesNotHaveManifest();
        if ($applications->count() > 0) {
            foreach ($applications as $application) {
                $this->compare($application);
            }
        }
    }

    public function compare($application)
    {
        $result = $this->manifest->getBlNumberWhichHasNotUsed($application->bill_number);
        if ($result != null) {
            $this->update($result, $application);
        }
    }

    public function update($result, $application)
    {
        $result->used = 1;
        $result->save();
        $application->manifest_id = $result->id;
        $application->save();
        return true;
    }

}