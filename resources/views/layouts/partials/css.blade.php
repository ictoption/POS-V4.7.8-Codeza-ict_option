<link rel="stylesheet" href="{{ asset('css/vendor.css?v=' . $asset_v) }}">

@if (in_array(session()->get('user.language', config('app.locale')), config('constants.langs_rtl')))
    <link rel="stylesheet" href="{{ asset('css/rtl.css?v=' . $asset_v) }}">
@endif

@yield('css')

<!-- app css -->
<link rel="stylesheet" href="{{ asset('css/app.css?v=' . $asset_v) }}">

@if (isset($pos_layout) && $pos_layout)
    <style type="text/css">
        .content {
            padding-bottom: 0px !important;
        }
    </style>
@endif
<style type="text/css">
    /*
 * Pattern lock css
 * Pattern direction
 * http://ignitersworld.com/lab/patternLock.html
 */
    .patt-wrap {
        z-index: 10;
    }

    .patt-circ.hovered {
        background-color: #cde2f2;
        border: none;
    }

    .patt-circ.hovered .patt-dots {
        display: none;
    }

    .patt-circ.dir {
        background-image: url("{{ asset('/img/pattern-directionicon-arrow.png') }}");
        background-position: center;
        background-repeat: no-repeat;
    }

    .patt-circ.e {
        -webkit-transform: rotate(0);
        transform: rotate(0);
    }

    .patt-circ.s-e {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .patt-circ.s {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .patt-circ.s-w {
        -webkit-transform: rotate(135deg);
        transform: rotate(135deg);
    }

    .patt-circ.w {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .patt-circ.n-w {
        -webkit-transform: rotate(225deg);
        transform: rotate(225deg);
    }

    .patt-circ.n {
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
    }

    .patt-circ.n-e {
        -webkit-transform: rotate(315deg);
        transform: rotate(315deg);
    }

    /* Dark Mode Styles */
    .dark-mode {
        background-color: #1a1a1a;
        color: #e0e0e0;
    }

    /* Header */
    .dark-mode .main-header .navbar,
    .dark-mode .main-header .logo {
        background-color: #2d2d2d !important;
        border-color: #404040;
    }

    /* Sidebar */
    .dark-mode .main-sidebar {
        background-color: #252525 !important;
    }

    .dark-mode .sidebar-menu>li>a {
        color: #bdbdbd !important;
        border-left: 3px solid transparent;
    }

    .dark-mode .sidebar-menu>li:hover>a,
    .dark-mode .sidebar-menu>li.active>a {
        background-color: #333 !important;
        color: #fff !important;
    }

    /* Content Area */
    .dark-mode .content-wrapper,
    .dark-mode .box,
    .dark-mode .box-header,
    .dark-mode .box-body,
    .dark-mode .card {
        background-color: #2d2d2d !important;
        color: #e0e0e0 !important;
        border-color: #404040 !important;
    }

    /* Tables */
    .dark-mode .table {
        color: #e0e0e0 !important;
    }

    .dark-mode .table th {
        background-color: #3d3d3d !important;
    }

    .dark-mode .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.05) !important;
    }

    /* Buttons */
    .dark-mode .btn-default {
        background-color: #404040 !important;
        border-color: #505050 !important;
        color: #e0e0e0 !important;
    }

    .dark-mode .btn-primary {
        background-color: #0066cc !important;
        border-color: #0052a3 !important;
    }

    /* Form Elements */
    .dark-mode .form-control,
    .dark-mode .select2-selection {
        background-color: #404040 !important;
        border-color: #505050 !important;
        color: #e0e0e0 !important;
    }

    .dark-mode .input-group-addon {
        background-color: #505050 !important;
        border-color: #505050 !important;
        color: #e0e0e0 !important;
    }

    /* Modals */
    .dark-mode .modal-content {
        background-color: #2d2d2d !important;
    }

    .dark-mode .modal-header,
    .dark-mode .modal-footer {
        border-color: #404040 !important;
    }

    /* Tabs */
    .dark-mode .nav-tabs {
        border-bottom-color: #404040 !important;
    }

    .dark-mode .nav-tabs>li>a {
        background-color: #404040 !important;
        color: #e0e0e0 !important;
    }

    .dark-mode .nav-tabs>li.active>a {
        background-color: #2d2d2d !important;
        border-color: #404040 !important;
        color: #fff !important;
    }

    /* Dropdowns */
    .dark-mode .dropdown-menu {
        background-color: #404040 !important;
        color: #e0e0e0 !important;
    }

    .dark-mode .dropdown-menu>li>a {
        color: #e0e0e0 !important;
    }

    .dark-mode .dropdown-menu>li>a:hover {
        background-color: #505050 !important;
    }

    /* Pagination */
    .dark-mode .pagination>li>a {
        background-color: #404040 !important;
        border-color: #505050 !important;
        color: #e0e0e0 !important;
    }

    .dark-mode .pagination>.active>a {
        background-color: #0066cc !important;
        border-color: #0052a3 !important;
    }

    /* Dark Mode - Universal Text Color */
    .dark-mode,
    .dark-mode *:not(.fas):not(.far):not(.fal):not(.fab) {
        color: #ffffff !important;
        background-color: #444 !important;
    }

    /* Specific Element Enhancements */
    .dark-mode {

        /* Headings */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            color: #ffffff !important;
        }

        /* Sections and Containers */
        section,
        article,
        aside,
        main,
        header,
        footer,
        div {
            background-color: #2d2d2d !important;
            border-color: #404040 !important;
        }

        /* Form Elements */
        input,
        textarea,
        select,
        option,
        optgroup {
            background-color: #404040 !important;
            border-color: #505050 !important;
        }

        /* Placeholder Text */
        ::placeholder {
            color: #bdbdbd !important;
        }

        /* Links */
        a {
            color: #80b3ff !important;
        }

        a:hover {
            color: #a3c4ff !important;
        }

        /* Tables */
        table,
        th,
        td {
            border-color: #505050 !important;
        }

        th {
            background-color: #3a3a3a !important;
        }

        /* Buttons */
        .btn:not(.btn-primary):not(.btn-success):not(.btn-danger) {
            background-color: #404040 !important;
            border-color: #505050 !important;
        }

        /* Cards and Boxes */
        .card,
        .box {
            background-color: #333 !important;
            border: 1px solid #444 !important;
        }

        /* Dropdowns */
        .dropdown-menu {
            background-color: #404040 !important;
            border-color: #505050 !important;
        }
    }

    /* HTML Element Base */
    .dark-mode html {
        background-color: #1a1a1a !important;
    }

    /* Sidebar Dark Mode */
    .dark-mode .main-sidebar {
        background-color: #1e1e1e !important;
        border-right: 1px solid #333 !important;
    }

    .dark-mode .sidebar-menu>li>a {
        color: #fff !important;
        border-left: 3px solid transparent !important;
    }

    .dark-mode .sidebar-menu li.header {
        color: #bdbdbd !important;
        background: #2d2d2d !important;
    }

    /* Expanded Submenu */
    .dark-mode .treeview-menu {
        background-color: #252525 !important;
    }

    .dark-mode .treeview-menu>li>a {
        color: #e0e0e0 !important;
        padding-left: 35px !important;
    }

    .dark-mode .treeview-menu>li.active>a,
    .dark-mode .treeview-menu>li>a:hover {
        background-color: #333 !important;
        color: #fff !important;
    }

    /* Menu Icons */
    .dark-mode .sidebar-menu li>a>.fa,
    .dark-mode .sidebar-menu li>a>.fas,
    .dark-mode .sidebar-menu li>a>.far {
        color: #a0a0a0 !important;
    }

    /* Active Menu Item */
    .dark-mode .sidebar-menu>li.active>a {
        border-left-color: #007bff !important;
        background-color: #333 !important;
    }

    /* Hover States */
    .dark-mode .sidebar-menu>li:hover>a {
        background-color: #2d2d2d !important;
        color: #fff !important;
    }

    /* Logo Section */
    .dark-mode .logo {
        background-color: #1a1a1a !important;
        border-bottom: 1px solid #333 !important;
    }

    .dark-mode .logo-lg {
        color: #fff !important;
    }

    /* Menu Toggle Button */
    .dark-mode .sidebar-toggle {
        background-color: #1a1a1a !important;
        /* border-right: 1px solid #333 !important; */
    }

    /* Logo switching for dark mode */
    .dark-mode .light-logo {
        display: none !important;
    }

    .dark-mode .dark-logo {
        display: block !important;
    }

    .light-logo {
        display: block;
    }

    .dark-logo {
        display: none;
    }

    .main-header .navbar {
        height: 62px;
        border-bottom: none !important;
    }
</style>
@if (!empty($__system_settings['additional_css']))
    {!! $__system_settings['additional_css'] !!}
@endif
