<!-- Modal Header -->
<?php require_once("views/admin/admin_shareconfig.php"); ?>
<div class="modal-header">
  <h4 class="modal-title">アプリケーションインストール</h4>
  <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<!-- Modal body -->
<div class="modal-body">
    <form action="/admin/share/server?setting=site&tab=app_install&act=confirm&webid=<?=$webid?>" method="post" id="app_install_form" />
        <div class="row">
            <label for="application" class="col-sm-3 col-form-label">アプリケーション</label>
            <div class="col-sm-8">
                <div class="form-check-inline">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input app" value="WORDPRESS" name="app" checked gourl="change/app_version">Word Press
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input app" value="ECCUBE" name="app" gourl="change/app_version">EC-CUBE
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <label for="install-method" class="col-sm-3 col-form-label">インストール方法</label>
            <div class="col-sm-8">
                <label for="install-method" class="col-form-label">新規インストール</label>
            </div>
        </div>
        <div class="row">
            <label for="version" class="col-sm-3 col-form-label">バージョン</label>
            <div class="col-sm-8" id="version">
                <?php
                foreach ($values=app_version("WORDPRESS") as $key => $value) {
                ?>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="app-version" <?php if($values[0]==$value){ echo "checked";}?> value="<?=$value?>"><?= $value ?>
                        </label>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="url" class="col-form-label">URL</label>
                <div class="">
                    <input type="text" class="form-control" id="url" name="url" placeholder="http(s)://ドメイン名/入力は任意" value="http://<?=$webdomain?>/">
                </div>
            </div>
            <div class="col-sm-6">
                <label for="site_name" class="col-form-label">サイト名</label>
                <div class="">
                    <input type="text" class="form-control" id="site_name" name="site_name" placeholder="サイト名">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="username" class="col-form-label">ユーザー名</label>
                <div class="">
                    <input type="text" class="form-control" id="username" name="username" placeholder="1～255文字、半角英数小文字と_-.@">
                </div>
            </div>
            <div class="col-sm-6">
                <label for="email" class="col-form-label">メールアドレス</label>
                <div class="">
                    <input type="email" class="form-control" id="email" name="email" placeholder="support@winserver.ne.jp">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="password" class="col-form-label">パスワード</label>
                <div class="">
                    <input type="password" class="form-control" id="password" name="password" placeholder="8～70文字、半角英数記号の組み合わせ">
                </div>
            </div>
        </div>
        <div class="row">
            <label for="database" class="col-form-label">データベース</label>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="db-name" class="col-form-label">データベース名</label>
                <div>
                    <input type="text" class="form-control" id="db_name" name="db_name" placeholder="データベース名" column="db_user" table="db_account" remark="mydbname">
                    <!-- <label for="db_name" id="db_name_ex_error" class="error"></label> -->
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-3"></div>
                <label for="db_user" class="col-form-label">ユーザー名</label>
                <div>
                    <input type="text" class="form-control" id="db_user" name="db_user" placeholder="ユーザー名" column="db_user" table="db_account" remark="mydbuser">
                    <!-- <label for="db_user" id="db_user_ex_error" class="error"></label> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="db_pass" class="col-form-label">パスワード</label>
                <div>
                    <input type="password" class="form-control" id="db_pass" name="db_pass" placeholder="8～70文字、半角英数字記号">
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Modal footer -->
<div class="modal-footer d-flex justify-content-center">
  <button type="button" class="btn btn-outline-info btn-sm" data-dismiss="modal">クリア</button>
  <button type="submit" class="btn btn-outline-info btn-sm" form="app_install_form">インストール</button>
</div>