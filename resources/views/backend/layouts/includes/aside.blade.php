<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('backend/assets/img/profile.jpg') }}">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        {{ auth()->user()->name }}
                        {{-- <span class="user-level">Administrator</span> --}}
                        {{-- <span class="caret"></span> --}}
                        <button type="button" class="btn btn-primary btn-border btn-round create-event-type-button"><i class="fa fa-plus"></i> Create</button>

                        {{-- <div class="col-md-3 create-event-type-section">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Task</h4>
                                    <p class="card-category">Complete</p>
                                </div>
                            </div>
                        </div> --}}
                    </span>
                </a>
                <div class="clearfix"></div>

                {{-- <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item @if(request()->segment(2) == 'dashboard') {{ 'active' }} @endif">
                <a href="{{ url('/backend/dashboard') }}">
                    <i class="la la-dashboard"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(2) == 'event') {{ 'active' }} @endif">
                <a href="{{ url('/backend/event/type') }}">
                    <i class="la la-table"></i>
                    <p>Event Type</p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(2) == 'meetings') {{ 'active' }} @endif">
                <a href="{{ url('/backend/meetings') }}">
                    <i class="la la-keyboard-o"></i>
                    <p>Meetings</p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(2) == 'availability') {{ 'active' }} @endif">
                <a href="{{ url('/backend/availability') }}">
                    <i class="la la-th"></i>
                    <p>Availability</p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(2) == 'contacts') {{ 'active' }} @endif">
                <a href="{{ url('/backend/contacts') }}">
                    <i class="la la-bell"></i>
                    <p>Contacts</p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(2) == 'workflows') {{ 'active' }} @endif">
                <a href="{{ url('/backend/workflows') }}">
                    <i class="la la-font"></i>
                    <p>Workflows</p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(2) == 'integrations') {{ 'active' }} @endif">
                <a href="{{ url('/backend/integrations') }}">
                    <i class="la la-fonticons"></i>
                    <p>Integrations &amp; Apps</p>
                </a>
            </li>
            <li class="nav-item @if(request()->segment(2) == 'routing') {{ 'active' }} @endif">
                <a href="{{ url('/backend/routing') }}">
                    <i class="la la-fonticons"></i>
                    <p>Routing</p>
                </a>
            </li>

        </ul>
    </div>
</div>
