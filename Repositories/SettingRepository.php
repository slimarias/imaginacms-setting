<?php namespace Modules\Setting\Repositories;

use Modules\Core\Repositories\BaseRepository;

interface SettingRepository extends BaseRepository
{
    /**
     * Create or update the settings
     * @param $settings
     * @return mixed
     */
    public function createOrUpdate($settings);

    /**
     * Find a setting by its name
     * @param $settingName
     * @return mixed
     */
    public function findByName($settingName);

    /**
     * Return all modules that have settings
     * with its settings
     * @param array $modules
     * @return array
     */
    public function moduleSettings(array $modules);
}