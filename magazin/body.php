<body>
    <!-- 
    define header, content and footers
     class dummy is used as a spacer fix 
    
    -->
    <div id="header">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?php
                require_once 'menu-left.php';
                ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                <?php
                require_once 'menu-right.php';
                ?>
            </div>
        </div>
    </div>
    <div class="dummy"></div>
    <div id="content" style="padding: 5px;">
        <?php
        /*
         * action switcher
         * load current action files

         */
        require_once ('action-' . $action . '.php');
        ?>
    </div>
    <div class="dummy"></div>
    <div id="footer">
        [
        @magazin online
        ]
    </div>
</body>

