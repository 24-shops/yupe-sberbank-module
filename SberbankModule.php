<?php

use yupe\components\WebModule;

/**
 * Class SberbankModule
 */
class SberbankModule extends WebModule
{
    /**
     *
     */
    const VERSION = '0.9.95';

    /**
     * @return array
     */
    public function getDependencies()
    {
        return ['payment'];
    }

    /**
     * @return bool
     */
    public function getNavigation()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function getAdminPageLink()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function getIsShowInAdminMenu()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return self::VERSION;
    }

    /**
     * @return array
     */
    public function getEditableParams()
    {
        return [];
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return Yii::t('SberbankModule.sberbank', 'Store');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return Yii::t('SberbankModule.sberbank', 'Sberbank');
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return Yii::t('SberbankModule.sberbank', 'Sberbank payment module');
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return Yii::t('SberbankModule.sberbank', 'LoveOrigami');
    }

    /**
     * @return string
     */
    public function getAuthorEmail()
    {
        return Yii::t('SberbankModule.sberbank', 'loveorigami@mail.ru');
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return 'fa fa-rub';
    }

    /**
     *
     */
    public function init()
    {
        parent::init();
    }

}
