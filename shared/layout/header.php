<?php
$basePath = dirname(dirname(dirname(__FILE__)));
include_once($basePath . "/configmanager/org_configuration.php");
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<!-- <title name="maruf">University of Pennsylvania</title> -->
<!-- <link rel="shortcut icon" type="image/png" sizes="16x16" href="<?= "../" . $response['orglogourl']; ?>"> -->

<?php
require $basePath . '/project-config.php';
if (isset($debug) && $debug) {
    include_once("dependency_style_script_offline.php");
} else {
    include_once("dependency_style_script_online.php");
}
?>

<link href="<?= $publicAccessUrl; ?>css/main.css" rel="stylesheet">
<?php include_once("mainjs.minfied.scripts.php"); ?>

<style media="screen">
    body {
        font-family: Tahoma, sans-serif;
    }

    /* .app-main .app-main__inner {
        padding: 15px 15px 0;
    } */
</style>

<style>
    input.text-white::-webkit-input-placeholder {
        color: #fff;
    }

    input.text-white::-moz-placeholder {
        color: #fff;
    }

    input.text-white:-ms-input-placeholder {
        color: #fff;
    }

    input.text-white:-moz-placeholder {
        color: #fff;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .grow {
        transition: all .2s ease-in-out;
    }

    .grow:hover {
        transform: scale(1.005);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }

    .card a:not(.collapsed) i.rotate-icon {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .custom_fieldset {
        border: 1px solid #cccccc;
        border-radius: .25rem;
        width: 100%;
        padding: 15px;
    }

    .legend-label {
        min-width: 250px;
        width: max-content;
        margin: 0px;
        border: 1px solid #cccccc;
        padding: 5px 10px;
        border-radius: 30px;
        text-align: center;
        box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%);
    }

    .pagination-button {
        background-color: #3f6ad8;
        color: #fff;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding: 0px 10px;
        border: 2px solid white;
        border-radius: 5px;
        cursor: pointer;
    }

    .pagination-pageno {
        color: #3f6ad8;
        /* background-color: #3f6ad8; */
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 1px 10px 0 rgba(0, 0, 0, 0.19);
        border: 2px solid white;
        border-radius: 5px;
        cursor: pointer;
        /* height: 75%; */
        margin-top: 0px;
        text-align: center;
        min-width: 120px;
    }

    a.mm-active .fa {
        color: #d92550;
    }

    a.mm-active .fas {
        color: #d92550;
    }

    .tabs-animated-shadow .nav-link {
        color: #3f6ad8;
        border: 1px solid #3f6ad8;
        border-radius: .25rem;
    }

    .select2-container .select2-selection--single {
        height: 38px !important;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 35px !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 38px !important;
    }

    table.dataTable tbody th,
    table.dataTable tbody td {
        padding: .3rem !important;
    }

    .custom_shadow {
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 20%), 0 2px 10px 0 rgb(0 0 0 / 10%);
    }

    .custom_shadow:hover {
        box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 10%);
    }

    .img-raised {
        box-shadow: 0 5px 15px -8px rgb(0 0 0 / 24%), 0 8px 10px -5px rgb(0 0 0 / 20%);
    }

    /* Ripple effect */
    .ripple {
        position: relative;
        overflow: hidden;
    }

    .ripple:before {
        content: "";
        position: absolute;
        display: block;
        background: var(--ripple-background, white);
        border-radius: 50%;
        pointer-events: none;
        top: calc(var(--y) * 1px);
        left: calc(var(--x) * 1px);
        width: calc(var(--d) * 1px);
        height: calc(var(--d) * 1px);
        opacity: calc(var(--o, 1) * var(--ripple-opacity, 0.3));
        transition: calc(var(--t, 0) * var(--ripple-duration, 600ms)) var(--ripple-easing, linear);
        transform: translate(-50%, -50%) scale(var(--s, 1));
        transform-origin: center;
    }
</style>

<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    $(document).on("click", `.ripple`, function(e) {
        e = e.touches ? e.touches[0] : e;
        const r = this.getBoundingClientRect(),
            d = Math.sqrt(Math.pow(r.width, 2) + Math.pow(r.height, 2)) * 2;
        this.style.cssText = `--s: 0; --o: 1;`;
        this.offsetTop;
        this.style.cssText = `--t: 1; --o: 0; --d: ${d}; --x:${e.clientX - r.left}; --y:${e.clientY - r.top};`;
    });

    $(document).on("shown.bs.modal", ".modal", (e) => $(e.target).find("input:not(:disabled,input[type=button],input[type=submit]),select,textarea").filter(":visible:first").trigger("focus"));

    $(document).on("keydown", "input:not(:disabled,input[type=button],input[type=submit]),select,textarea", function(e) {
        let form = $(this).parents("form:eq(0)");
        if (form && e.shiftKey && e.key === "Enter") {
            e.preventDefault();
            form.find(":submit").trigger("click");
        } else if (form && e.key === "Enter" && ($(this).prop("tagName").toLowerCase() != "textarea")) {
            let focusable = form.find("input:not(:disabled,input[type=button],input[type=submit]),select,textarea").filter(":visible");
            let next = focusable.eq(focusable.index(this) + 1);
            if (next.length) {
                next.focus();
            } else {
                e.preventDefault();
                form.find(":submit").trigger("click");
            }
        }
    });
</script>

<script>
    const org_configuration = `<?= json_encode($response); ?>`;
</script>