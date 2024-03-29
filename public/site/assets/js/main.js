$(document).ready
(
    function()
    {
        // menu
        $(".menu .col-level-2 a").mouseenter
        (
            function()
            {
                let catId = $(this).attr("data-cat-id");

                $(".menu .col-level-2 a, .menu .col-level-3").removeClass("active");
                $(".menu .col-level-2 a[data-cat-id=" + catId + "]").addClass("active");
                $(".menu .col-level-3[data-cat-id=" + catId + "]").addClass("active");
            }
        );

        $('.menu .level-1').mouseenter
        (
            function()
            {
                $(this).doTimeout
                (
                    'hover',
                    300,
                    function(elem)
                    {
                        $(this).addClass("active");
                        $(this).find(".level-2").slideDown();
                    }
                );
            }
        ).mouseleave
        (
            function()
            {
                $(this).doTimeout
                (
                    'hover',
                    300,
                    function(elem)
                    {
                        $(this).removeClass("active");
                        $(this).find(".level-2").slideUp();
                    }
                );
            }
        );

        // sign in
        $('.btn-form-sign-in-password').click
        (
            function()
            {
                if($('.form-sign-in-password').attr('type') === 'text')
                {
                    $('.form-sign-in-password').attr('type', 'password');
                    $('.btn-form-sign-in-password').removeClass('bi-eye-slash').addClass('bi-eye');
                }
                else
                {
                    $('.form-sign-in-password').attr('type', 'text');
                    $('.btn-form-sign-in-password').removeClass('bi-eye').addClass('bi-eye-slash');
                }
            }
        );

        // mobile side menu
        $('.mobile-side-menu .nav-dropdown-toggle').click
        (
            function()
            {
                $(this).toggleClass('open');
                $(this.nextElementSibling).slideToggle();

                return false;
            }
        );

        // select2
        $('.select-box-select2').select2
        ({
            language: "fa",
            dir: "rtl"
        });

        // checkbox new style
        $('.label-input-checkbox-by-style input').change
        (
            function()
            {
                $(this).parents('label').toggleClass('active-checked');
            }
        );

        // show password
        $('.btn-show-password').click
        (
            function()
            {
                var obj = $(this).parent().find("input");

                if(obj.attr('type') === 'text')
                {
                    obj.attr('type', 'password');
                    $(this).removeClass('fi-rr-eye-crossed').addClass('fi-rr-eye');
                }
                else
                {
                    obj.attr('type', 'text');
                    $(this).removeClass('fi-rr-eye').addClass('fi-rr-eye-crossed');
                }
            }
        );
    }
);
