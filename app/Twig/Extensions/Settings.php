<?php
/**
 * Settings extension for Twig.
 *
 * @author    MyBB Group
 * @version   2.0.0
 * @package   mybb/core
 * @copyright Copyright (c) 2015, MyBB Group
 * @license   http://www.mybb.com/licenses/bsd3 BSD-3
 * @link      http://www.mybb.com
 */

namespace MyBB\Core\Twig\Extensions;

use MyBB\Settings\Store;
use Twig_Extension;
use Twig_SimpleFunction;

class Settings extends Twig_Extension
{
    /**
     * @var Store $settings ;
     */
    protected $settings;

    /**
     * Create a new settings extension.
     *
     * @param Store $settings Settings store.
     */
    public function __construct(Store $settings)
    {
        $this->settings = $settings;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'MyBB_Twig_Extensions_Settings';
    }

    /**
     * {@inheritDoc}
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('setting', [$this->settings, 'get']),
        ];
    }
}
