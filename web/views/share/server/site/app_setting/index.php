<?php require_once('views/share/header.php'); ?>
<?php $webappversion = json_decode($webappversion); ?>
    <div id="layoutSidenav">
        <?php require_once('views/share/sidebar.php');?>
            <div id="layoutSidenav_content">
            <main class="main-page">
                    <div class="container-fluid px-4">
                            <?php require_once('views/share/title.php') ?>
                            <?php require_once('views/share/server/subtitle.php') ?>
                            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                            <?php require_once("views/share/server/$setting/tab.php") ?>
                                <!-- start -->
                                <div class="tab-content">
                        <div id="oyo-setting" class="active pr-3 pl-3 tab-pane">
                            <div class="row mt-3">
                                <div class="col-2">
                                    <div><label>Web.config 設定</label></div>
                                </div>
                                <div class="col-10">
                                    <div>
                                        <label>/<?=$webuser?>/web/web.config</label>
                                        <label><button class="btn btn-sm  common_dialog" gourl="/share/server?setting=site&tab=app_setting&act=web.config"  data-toggle="modal" data-target="#common_dialog"><i class="fas fa-edit text-warning"></i></button></label>
                                    </div>
                                    <div id="webconfig_">
                                        <textarea type="text" class="form-control" rows="5" cols="30" readonly><?= getFile($webrootuser."/".$webuser."/web/web.config")?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2">
                                    <div><label>PHP設定</label></div>
                                    <div>
                                        <label>PHPバージョン <?=$webappversion->app->php?></label>
                                        <label><button class="btn btn-sm common_dialog" gourl="/share/server?setting=site&tab=app_setting&act=php_version"  data-toggle="modal" data-target="#common_dialog"><i class="fas fa-edit text-warning"></i></button></label>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div>
                                        <label>/<?=$webuser?>/web/.user.ini</label>
                                        <label><button class="btn btn-sm common_dialog" gourl="/share/server?setting=site&tab=app_setting&act=.user.ini"  data-toggle="modal" data-target="#common_dialog"><i class="fas fa-edit text-warning"></i></button></label>
                                    </div>
                                    <div id="phpini_">
                                        <textarea type="text" class="form-control" rows="5" cols="30" readonly><?= getFile($webrootuser."/".$webuser."/web/.user.ini")?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col-2">
                                    <div><label>ASP.NET設定</label></div>
                                    <div>
                                        <label>.NETバージョン <?=$webappversion->app->dotnet?></label>
                                        <label><button class="btn btn-sm common_dialog" gourl="/share/server?setting=site&tab=app_setting&act=dotnet_version"  data-toggle="modal" data-target="#common_dialog"><i class="fas fa-edit text-warning"></i></button></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <!-- end content -->
                            </div>
                    </div>
                </main>
            </div>
        </div> 
 <?php require_once("views/share/footer.php"); ?>
