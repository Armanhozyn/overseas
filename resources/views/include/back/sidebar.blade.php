<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu text-uppercase list-unstyled" id="side-menu">
        <li class="menu-title" key="t-apps">Apps</li>
        <li>
            <a href="{{ route('contactData') }}" class="waves-effect">
                <i class="bx bx-chat"></i>
                <span key="t-chat">Contact Informations</span>
            </a>
        </li>
        <li>
            <a href="{{ route('eligibilityRequests') }}" class="waves-effect">
                <i class="bx bx-chat"></i>
                <span key="t-chat">Eligibility Requests</span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-calendar"></i>
                <span key="t-dashboards">menu items</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('menulist') }}" key="t-tui-calendar">main menu</a></li>
                <li><a href="{{ route('submenus') }}" key="t-full-calendar">sub menu</a></li>
                {{--  <li><a href="{{ route('routes') }}" key="t-full-calendar">connectiones</a></li>  --}}
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-calendar"></i>
                <span key="t-dashboards">page items</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a key="t-tui-calendar" href="{{ route('page.create') }}">Add Page Items</a></li>
                <li><a key="t-full-calendar" href="{{ route('page.all') }}">All Running Page</a></li>
                <li><a key="t-full-calendar" href="{{ route('page.allArchive') }}">All Archived Page</a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- Sidebar -->
