        </div><!--col--->
        <div class="sidebar col-md-3 col-sm-4">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR."local/templates/eshop_bootstrap_black/include/page/sidebar.php",
                    "AREA_FILE_RECURSIVE" => "N",
                    "EDIT_MODE" => "html",
                ),
                false,
                Array('HIDE_ICONS' => 'Y')
            );?>
        </div>
    </div><!--row-->
</div><!--container-->
