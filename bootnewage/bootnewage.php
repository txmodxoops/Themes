<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

xoops_load('gui', 'system');

/*
 * Xoops Cpanel BootNewage GUI class
 *
 * @copyright       (c) 2000-2014 XOOPS Project (www.xoops.org)
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package     system
 * @usbpackage  GUI
 * @since       2.5
 * @author      Mamba       <mambax7@gmail.com>
 * @author      Mojtabajml  <jamali.mojtaba@gmail.com>
 * @author      Voltan      <djvoltan@gmail.com>
 * @author      BitC3R0     <BitC3R0@gmail.com>
 * @author      trabis      <lusopoemas@gmail.com>
 * @version     1.2
 * @version     $Id: bootnewage.php 12852 2014-12-27 09:14:37Z timgno $
 */

/**
 * Class XoopsGuiBootNewage
 */
class XoopsGuiBootNewage extends XoopsSystemGui
{

    /**
     *
     */
    public function __construct()
    {
    }

    public function XoopsGuiBootNewage()
    {
        $this->__construct();
    }

    /**
     * @return bool
     */
    public function validate()
    {
        return true;
    }

    public function header()
    {
        parent::header();

        global $xoopsConfig, $xoopsUser, $xoopsModule, $xoTheme, $xoopsTpl;
        $tpl =& $this->template;

		$xoTheme->addStylesheet( 'xoops.css' );
		$xoTheme->addStylesheet(XOOPS_URL . '/modules/system/css/ui/' . xoops_getModuleOption('jquery_theme', 'system') . '/ui.all.css');
        $xoTheme->addStylesheet(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/css/bootstrap.min.css', array('media' => 'screen'));
		$xoTheme->addStylesheet(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/css/bootstrap-theme.min.css', array('media' => 'screen'));
		$xoTheme->addStylesheet(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/css/style.css', array('id' => 'switch_style') );
        $xoTheme->addStylesheet(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/css/dark.css', array('title' => 'dark', 'media' => 'screen'));
        $xoTheme->addStylesheet(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/css/silver.css', array('title' => 'silver', 'media' => 'screen'));
        $xoTheme->addStylesheet(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/css/orange.css', array('title' => 'orange', 'media' => 'screen'));
        $xoTheme->addStylesheet(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/css/red.css', array('title' => 'red', 'media' => 'screen'));
        $xoTheme->addStylesheet(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/css/green.css', array('title' => 'green', 'media' => 'screen'));
        $xoTheme->addStylesheet(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/css/yellow.css', array('title' => 'yellow', 'media' => 'screen'));
        $xoTheme->addStylesheet(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/css/blue.css', array('title' => 'blue', 'media' => 'screen'));
        		
        $xoTheme->addScript('browse.php?Frameworks/jquery/jquery.min.js');
		$xoTheme->addScript('browse.php?Frameworks/jquery/plugins/jquery.ui.js');
		$xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/bootstrap.min.js');
        $xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/bootnewage.js');
        $xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/styleswitch.js');
        $xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/formenu.js');
        $xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/menu.js');
        $xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/tooltip.js');
        $xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/tabs.jquery.tools.min.js');

        $tpl->assign('lang_cp', _CPHOME);
        //start system overview
        //$tpl->assign('lang_xoops_version', XOOPS_VERSION);
        $tpl->assign('lang_php_vesion', PHP_VERSION);
        $tpl->assign('lang_mysql_version', mysql_get_server_info());
        $tpl->assign('lang_server_api', PHP_SAPI);
        $tpl->assign('lang_os_name', PHP_OS);
        $tpl->assign('safe_mode', ini_get( 'safe_mode' ) ? 'On' : 'Off');
        $tpl->assign('register_globals', ini_get( 'register_globals' ) ? 'On' : 'Off');
        $tpl->assign('magic_quotes_gpc', ini_get( 'magic_quotes_gpc' ) ? 'On' : 'Off');
        $tpl->assign('allow_url_fopen', ini_get( 'allow_url_fopen' ) ? 'On' : 'Off');
        $tpl->assign('fsockopen', function_exists( 'fsockopen' ) ? 'On' : 'Off');
        $tpl->assign('allow_call_time_pass_reference', ini_get( 'allow_call_time_pass_reference' ) ? 'On' : 'Off');
        $tpl->assign('post_max_size', ini_get( 'post_max_size' ));
        $tpl->assign('max_input_time', ini_get( 'max_input_time' ));
        $tpl->assign('output_buffering', ini_get( 'output_buffering' ));
        $tpl->assign('max_execution_time', ini_get( 'max_execution_time' ));
        $tpl->assign('memory_limit', ini_get( 'memory_limit' ));
        $tpl->assign('file_uploads', ini_get( 'file_uploads' ) ? 'On' : 'Off');
        $tpl->assign('upload_max_filesize', ini_get( 'upload_max_filesize' ));
        $tpl->assign('xoops_sitename', $xoopsConfig['sitename']);

        // ADD MENU *****************************************

        //Add  CONTROL PANEL  Menu  items
        $menu = array();
        $menu[0]['link'] = XOOPS_URL;
        $menu[0]['title'] = _YOURHOME;
        $menu[0]['absolute'] = 1;
        $menu[1]['link'] = XOOPS_URL . '/admin.php?xoopsorgnews=1';
        $menu[1]['title'] = _OXYGEN_NEWS;
        $menu[1]['absolute'] = 1;
        $menu[1]['icon'] = XOOPS_ADMINTHEME_URL . '/bootnewage/assets/img/xoops.png';
        $menu[2]['link'] = XOOPS_URL . '/user.php?op=logout';
        $menu[2]['title'] = _LOGOUT;
        $menu[2]['absolute'] = 1;
        $menu[2]['icon'] = XOOPS_ADMINTHEME_URL . '/bootnewage/assets/img/logout.png';
        $tpl->append('navitems', array('link' => XOOPS_URL . '/admin.php', 'title' => _CPHOME, 'icon' => 'dashboard', 'menu' => $menu));

        //add SYSTEM  Menu items
        include __DIR__ . '/menu.php';
        if (empty($xoopsModule) || 'system' == $xoopsModule->getVar('dirname', 'n')) {
            $modpath = XOOPS_URL . '/admin.php';
            $modname = _OXYGEN_SYSOPTIONS;
            $modid = 1;
            $moddir = 'system';
            $mod_options = $adminmenu;
            foreach (array_keys($mod_options) as $item) {
                $mod_options[$item]['link'] = empty($mod_options[$item]['absolute']) ? XOOPS_URL . "/modules/{$moddir}/" . $mod_options[$item]['link'] : $mod_options[$item]['link'];
                $mod_options[$item]['icon'] = empty($mod_options[$item]['icon']) ? '' : XOOPS_ADMINTHEME_URL . '/bootnewage/assets/' . $mod_options[$item]['icon'];
                unset($mod_options[$item]['icon_small']);
            }
        } else {
            $moddir = $xoopsModule->getVar('dirname', 'n');
            $modpath = XOOPS_URL . '/modules/' . $moddir;
            $modname = $xoopsModule->getVar('name');
            $modid = $xoopsModule->getVar('mid');

            $mod_options = $xoopsModule->getAdminMenu();
            foreach (array_keys($mod_options) as $item) {
                $mod_options[$item]['link'] = empty($mod_options[$item]['absolute']) ? XOOPS_URL . "/modules/{$moddir}/" . $mod_options[$item]['link'] : $mod_options[$item]['link'];
                $mod_options[$item]['icon'] = empty($mod_options[$item]['icon']) ? '' : XOOPS_URL . "/modules/{$moddir}/" . $mod_options[$item]['icon'];
            }
        }

        $tpl->assign('mod_options', $mod_options);
        $tpl->assign('modpath', $modpath);
        $tpl->assign('modname', $modname);
        $tpl->assign('modid', $modid);
        $tpl->assign('moddir', $moddir);

        // add MODULES  Menu items
        $module_handler =& xoops_gethandler('module');
        $criteria = new CriteriaCompo();
        $criteria->add(new Criteria('hasadmin', 1));
        $criteria->add(new Criteria('isactive', 1));
        $criteria->setSort('mid');
        $mods = $module_handler->getObjects($criteria);

        $menu = array();
        $moduleperm_handler =& xoops_gethandler('groupperm');
		$item_id = 1;
        foreach ($mods as $mod) {
            $rtn = array();
            $modOptions = array();                                                         //add for sub menus
            $sadmin = $moduleperm_handler->checkRight('module_admin', $mod->getVar('mid'), $xoopsUser->getGroups());
            if ($sadmin) {
                $info = $mod->getInfo();
                if (!empty($info['adminindex'])) {
                    $rtn['link'] = XOOPS_URL . '/modules/'. $mod->getVar('dirname', 'n') . '/' . $info['adminindex'];
                } else {
                    $rtn['link'] = XOOPS_URL . '/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . $mod->getVar('mid');
                }
                $rtn['id'] = $item_id;
				$rtn['title'] = htmlspecialchars($mod->name(), ENT_QUOTES);
                $rtn['absolute'] = 1;
                $rtn['url'] = XOOPS_URL . '/modules/'. $mod->getVar('dirname', 'n') . '/'; //add for sub menus
                $modOptions = $mod->getAdminMenu();                                        //add for sub menus
                $rtn['options'] = $modOptions;                                             //add for sub menus
					
                if (isset($info['icon']) && $info['icon'] != '' ) {
                    $rtn['icon'] = XOOPS_URL . '/modules/' . $mod->getVar('dirname', 'n') . '/' . $info['icon'];
                }
                $menu[] = $rtn;
            }
			$item_id++;
		}
		unset($item_id);
       $tpl->append('navitems', array('link' => XOOPS_URL . '/modules/system/admin.php?fct=modulesadmin', 'title' => _AM_SYSTEM_MODULES, 'icon' => 'list-alt', 'dir' => $mod->getVar('dirname', 'n'), 'menu' => $menu));

        // add preferences menu
        $menu = array();

        $OPT = array();
        $OPT[] = array(
            'link'      => 'admin.php?fct=preferences&amp;op=show&amp;confcat_id=1',
            'title'     => _OXYGEN_GENERAL,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/bootnewage/assets/icons/prefs_small.png');
        $OPT[] = array(
            'link'      => 'admin.php?fct=preferences&amp;op=show&amp;confcat_id=2',
            'title'     => _OXYGEN_USERSETTINGS,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/bootnewage/assets/icons/prefs_small.png');
        $OPT[] = array(
            'link'      => 'admin.php?fct=preferences&amp;op=show&amp;confcat_id=3',
            'title'     => _OXYGEN_METAFOOTER,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/bootnewage/assets/icons/prefs_small.png');
        $OPT[] = array(
            'link'      => 'admin.php?fct=preferences&amp;op=show&amp;confcat_id=4',
            'title'     => _OXYGEN_CENSOR,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/bootnewage/assets/icons/prefs_small.png');
        $OPT[] = array(
            'link'      => 'admin.php?fct=preferences&amp;op=show&amp;confcat_id=5',
            'title'     => _OXYGEN_SEARCH,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/bootnewage/assets/icons/prefs_small.png');
        $OPT[] = array(
            'link'      => 'admin.php?fct=preferences&amp;op=show&amp;confcat_id=6',
            'title'     => _OXYGEN_MAILER,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/bootnewage/assets/icons/prefs_small.png');
        $OPT[] = array(
            'link'      => 'admin.php?fct=preferences&amp;op=show&amp;confcat_id=7',
            'title'     => _OXYGEN_AUTHENTICATION,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/bootnewage/assets/icons/prefs_small.png');
        $OPT[] = array(
            'link'      => 'admin.php?fct=preferences&amp;op=showmod&amp;mod=1',
            'title'     => _OXYGEN_MODULESETTINGS,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/bootnewage/assets/icons/prefs_small.png');

        $menu[] = array(
            'link'      => XOOPS_URL . '/modules/system/admin.php?fct=preferences',
            'title'     => _OXYGEN_SYSOPTIONS,
            'absolute'  => 1,
            'url'     => XOOPS_URL . '/modules/system/',
            'options' => $OPT);

        foreach ($mods as $mod) {
            $rtn = array();
            $sadmin = $moduleperm_handler->checkRight('module_admin', $mod->getVar('mid'), $xoopsUser->getGroups());
            if ($sadmin && ($mod->getVar('hasnotification') || is_array($mod->getInfo('config')) || is_array($mod->getInfo('comments')))) {
                $rtn['link'] = XOOPS_URL . '/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . $mod->getVar('mid');
                $rtn['title'] = htmlspecialchars($mod->name(), ENT_QUOTES);
                $rtn['absolute'] = 1;
                $rtn['icon'] = XOOPS_ADMINTHEME_URL . '/gui/oxygen/icons/prefs_small.png';
                $menu[] = $rtn;
            }
        }
        $tpl->append('navitems', array('link' => XOOPS_URL . '/modules/system/admin.php?fct=preferences', 'title' => _OXYGEN_SITEPREF, 'icon' => 'cog', 'dir' => $mod->getVar('dirname', 'n'), 'menu' => $menu));

        //add OPTIONS/Links Menu Items
        $menu = array();
        $menu[] = array(
            'link'      => 'http://sourceforge.net/projects/xoops/',
            'title'     => _OXYGEN_XOOPSPROJECT,
            'absolute'  => 1,
            'target'  => '_blank');
        $menu[] = array(
            'link'      => 'http://xoops.org',
            'title'     => _OXYGEN_WEBSITE,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/bootnewage/assets/img/xoops.png',
            'target'  => '_blank');
        $menu[] = array(
            'link'      => 'http://www.xoops.org/modules/repository/',
            'title'     => _OXYGEN_XOOPSMODULES,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/bootnewage/assets/img/xoops.png',
            'target'  => '_blank');
        $menu[] = array(
            'link'      => 'http://www.xoops.org/modules/extgallery/',
            'title'     => _OXYGEN_XOOPSTHEMES,
            'absolute'  => 1,
            'icon'     => XOOPS_ADMINTHEME_URL . '/bootnewage/assets/img/tweb.png',
            'target'  => '_blank');

        $tpl->append('navitems', array('link' => XOOPS_URL . '/admin.php', 'title' => _OXYGEN_INTERESTSITES, 'icon' => 'share', 'menu' => $menu));

        //add OPTIONS/links for local support
        if (file_exists($file = XOOPS_ADMINTHEME_PATH . '/bootnewage/language/' . $xoopsConfig['language'] . '/localsupport.php' )) {
            $links = include XOOPS_ADMINTHEME_PATH . '/bootnewage/language/' . $xoopsConfig['language'] . '/localsupport.php';
            if ( count($links) > 0 ) {
                $tpl->append('navitems', array('link' => XOOPS_URL . '/admin.php','text' => _OXYGEN_LOCALSUPPORT, 'menu' => $links));
            }
        }

        if (is_object($xoopsModule) || !empty($_GET['xoopsorgnews'])) {
            if (is_object($xoopsModule) && file_exists($file = XOOPS_ROOT_PATH . '/modules/' . $xoopsModule->getVar('dirname') . '/' . $xoopsModule->getInfo('adminmenu'))) {
                include $file;
            }
            return;
        }
		$item_id = 1;
        foreach ($mods as $mod) {
            $sadmin = $moduleperm_handler->checkRight ( 'module_admin', $mod->getVar ( 'mid' ), $xoopsUser->getGroups () );
            if ($sadmin) {
                $rtn = array ();
                $info = $mod->getInfo ();
                if (! empty ( $info ['adminindex'] )) {
                    $rtn ['link'] = XOOPS_URL . '/modules/' . $mod->getVar ( 'dirname', 'n' ) . '/' . $info ['adminindex'];
                } else {
                    $rtn ['link'] = XOOPS_URL . '/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . $mod->getVar ( 'mid' );
                }
				$rtn ['id'] = $item_id;
                $rtn ['title'] = htmlspecialchars($mod->getVar ('name'), ENT_QUOTES);
				$rtn ['image'] = $mod->getInfo('image');
                $rtn ['description'] = $mod->getInfo('description');
                $rtn ['absolute'] = 1;
                if (isset ( $info ['icon_big'] )) {
                    $rtn ['icon'] = XOOPS_URL . '/modules/' . $mod->getVar ( 'dirname', 'n' ) . '/' . $info ['icon_big'];
                } elseif (isset ( $info ['image'] )) {
                    $rtn ['icon'] = XOOPS_URL . '/modules/' . $mod->getVar ( 'dirname', 'n' ) . '/' . $info ['image'];
                }
                $tpl->append ( 'modules', $rtn );
            }
			$item_id++;
        }	
		$limit = 10;
		$start = isset($_REQUEST['start']) ? $_REQUEST['start'] : 0;
		if ( $item_id > $limit ) {				
			xoops_load('XoopsPageNav');
			$pagenav = new XoopsPageNav($item_id, $limit, $start, 'start', 'limit=' . $limit);
			$pagenav = $pagenav->renderNav(4);
		} else {
			$pagenav = '';
		} 
		unset($item_id);
		$tpl->assign('pagenav', $pagenav);
    }

	/*function footer()
    {
        parent::footer();
		$xoTheme->addScript('browse.php?Frameworks/jquery/jquery.js');
		$xoTheme->addScript('browse.php?Frameworks/jquery/plugins/jquery.ui.js');
		$xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/bootstrap.min.js');
        $xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/styleswitch.js');
        $xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/formenu.js');
        $xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/menu.js');
        $xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/tooltip.js');
        $xoTheme->addScript(XOOPS_ADMINTHEME_URL . '/bootnewage/assets/js/tabs.jquery.tools.min.js');
	}*/
}