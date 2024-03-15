@extends('layouts.app')

@section('content')
    <div class="row justify-content-lg-center">
        <div class="col-lg-10">
            <!-- Profile Cover -->
            <div class="profile-cover">
                <div class="profile-cover-img-wrapper">
                    <img id="profileCoverImg" class="profile-cover-img" src="assets/img/1920x400/img2.jpg"
                        alt="Image Description">

                    <!-- Custom File Cover -->
                    <div class="profile-cover-content profile-cover-uploader p-3">
                        <input type="file" class="js-file-attach profile-cover-uploader-input" id="profileCoverUplaoder"
                            data-hs-file-attach-options="{
                        &quot;textTarget&quot;: &quot;#profileCoverImg&quot;,
                        &quot;mode&quot;: &quot;image&quot;,
                        &quot;targetAttr&quot;: &quot;src&quot;,
                        &quot;allowTypes&quot;: [&quot;.png&quot;, &quot;.jpeg&quot;, &quot;.jpg&quot;]
                     }">
                    </div>
                    <!-- End Custom File Cover -->
                </div>
            </div>
            <!-- End Profile Cover -->

            <!-- Profile Header -->
            <div class="text-center mb-5">
                <!-- Avatar -->
                <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar"
                    for="editAvatarUploaderModal">
                    <img id="editAvatarImgModal" class="avatar-img" @if(Auth::user()->profile != null) src="{{ asset('/profile/') }}/{{ Auth::user()->profile }}" @else src="{{asset('assets/img/man.png')}}" @endif
                        alt="Image Description">

                    <input type="file" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal"
                        data-hs-file-attach-options="{
                      &quot;textTarget&quot;: &quot;#editAvatarImgModal&quot;,
                      &quot;mode&quot;: &quot;image&quot;,
                      &quot;targetAttr&quot;: &quot;src&quot;,
                      &quot;allowTypes&quot;: [&quot;.png&quot;, &quot;.jpeg&quot;, &quot;.jpg&quot;]
                   }">

                    <span class="avatar-uploader-trigger">
                        <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                    </span>
                </label>
                <!-- End Avatar -->

                <h1 class="page-header-title">{{$user->full_name}} @if($user->is_active != null)<i class="bi-patch-check-fill fs-2 text-primary"
                        data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Active"
                        data-bs-original-title="Active"></i>@endif</h1>

                <!-- List -->
                <ul class="list-inline list-px-2">
                    <li class="list-inline-item">
                        <i class="bi-envelope me-1"></i>
                        <span>{{$user->email}}</span>
                    </li>
                </ul>
                <!-- End List -->
            </div>
            <!-- End Profile Header -->

            <!-- Nav -->
            <div class="js-nav-scroller hs-nav-scroller-horizontal mb-5">
                <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                        <i class="bi-chevron-left"></i>
                    </a>
                </span>

                <span class="hs-nav-scroller-arrow-next" style="display: none;">
                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                        <i class="bi-chevron-right"></i>
                    </a>
                </span>

                <ul class="nav nav-tabs align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active disabled" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Projects <span
                                class="badge bg-soft-dark text-dark rounded-circle ms-1">3</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Connections</a>
                    </li>

                    <li class="nav-item ms-auto">
                        <div class="d-flex gap-2">
                            <a class="btn btn-white btn-sm" href="account-settings.html">
                                <i class="bi-person-plus-fill me-1"></i> Edit profile
                            </a>

                            <a class="btn btn-white btn-icon btn-sm" href="#">
                                <i class="bi-list-ul me-1"></i>
                            </a>

                            <!-- Dropdown -->
                            <div class="dropdown nav-scroller-dropdown">
                                <button type="button" class="btn btn-white btn-icon btn-sm" id="profileDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi-three-dots-vertical"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="profileDropdown">
                                    <span class="dropdown-header">Settings</span>

                                    <a class="dropdown-item" href="#">
                                        <i class="bi-share-fill dropdown-item-icon"></i> Share profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-slash-circle dropdown-item-icon"></i> Block page and profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-info-circle dropdown-item-icon"></i> Suggest edits
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <span class="dropdown-header">Feedback</span>

                                    <a class="dropdown-item" href="#">
                                        <i class="bi-flag dropdown-item-icon"></i> Report
                                    </a>
                                </div>
                            </div>
                            <!-- End Dropdown -->
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End Nav -->

            <div class="row">
                <div class="col-lg-4">
                    <!-- Card -->
                    <div class="card card-body mb-3 mb-lg-5">
                        <h5>Complete your profile</h5>

                        <!-- Progress -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="progress flex-grow-1">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 15%"
                                    aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ms-4">15%</span>
                        </div>
                        <!-- End Progress -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header card-header-content-between">
                            <h4 class="card-header-title">Profile</h4>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <ul class="list-unstyled list-py-2 text-dark mb-0">
                                <li class="pb-0"><span class="card-subtitle">About</span></li>
                                <li><i class="bi-person dropdown-item-icon"></i> Mark Williams</li>
                                <li><i class="bi-briefcase dropdown-item-icon"></i> No department</li>
                                <li><i class="bi-building dropdown-item-icon"></i> Pixeel Ltd.</li>

                                <li class="pt-4 pb-0"><span class="card-subtitle">Contacts</span></li>
                                <li><i class="bi-at dropdown-item-icon"></i> mark@site.com</li>
                                <li><i class="bi-phone dropdown-item-icon"></i> +1 (555) 752-01-10</li>

                                <li class="pt-4 pb-0"><span class="card-subtitle">Teams</span></li>
                                <li class="fs-6 text-body"><i class="bi-people dropdown-item-icon"></i> You are not a
                                    member of any teams</li>
                                <li class="fs-6 text-body"><i class="bi-stickies dropdown-item-icon"></i> You are not
                                    working on any projects</li>
                            </ul>
                        </div>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card card-lg mb-3 mb-lg-5">
                        <!-- Body -->
                        <div class="card-body text-center">
                            <div class="mb-4">
                                <img class="avatar avatar-xl avatar-4x3" src="assets/svg/illustrations/oc-unlock.svg"
                                    alt="Image Description" data-hs-theme-appearance="default">
                                <img class="avatar avatar-xl avatar-4x3"
                                    src="assets/svg/illustrations-light/oc-unlock.svg" alt="Image Description"
                                    data-hs-theme-appearance="dark">
                            </div>

                            <div class="mb-3">
                                <h3>2-step verification</h3>
                                <p>Protect your account now and enable 2-step verification in the settings.</p>
                            </div>

                            <a class="btn btn-primary" href="account-settings.html#twoStepVerificationSection">Enable
                                now</a>
                        </div>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col-lg-8">
                    <!-- Card -->
                    <div class="card card-centered mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header card-header-content-between">
                            <h4 class="card-header-title">Activity stream</h4>

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle"
                                    id="contentActivityStreamDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi-three-dots-vertical"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-end mt-1"
                                    aria-labelledby="contentActivityStreamDropdown">
                                    <span class="dropdown-header">Settings</span>

                                    <a class="dropdown-item" href="#">
                                        <i class="bi-share-fill dropdown-item-icon"></i> Share connections
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-info-circle dropdown-item-icon"></i> Suggest edits
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <span class="dropdown-header">Feedback</span>

                                    <a class="dropdown-item" href="#">
                                        <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                                    </a>
                                </div>
                            </div>
                            <!-- End Dropdown -->
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body card-body-height">
                            <img class="avatar avatar-xxl mb-3" src="assets/svg/illustrations/oc-error.svg"
                                alt="Image Description" data-hs-theme-appearance="default">
                            <img class="avatar avatar-xxl mb-3" src="assets/svg/illustrations-light/oc-error.svg"
                                alt="Image Description" data-hs-theme-appearance="dark">
                            <p class="card-text">No data to show</p>
                            <a class="btn btn-white btn-sm" href="index.html#">Start your Activity</a>
                        </div>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card card-centered mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header card-header-content-between">
                            <h4 class="card-header-title">Projects</h4>

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle"
                                    id="projectReportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi-three-dots-vertical"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="projectReportDropdown">
                                    <span class="dropdown-header">Settings</span>

                                    <a class="dropdown-item" href="#">
                                        <i class="bi-share-fill dropdown-item-icon"></i> Share connections
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi-info-circle dropdown-item-icon"></i> Suggest edits
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <span class="dropdown-header">Feedback</span>

                                    <a class="dropdown-item" href="#">
                                        <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                                    </a>
                                </div>
                            </div>
                            <!-- End Dropdown -->
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body card-body-height card-body-centered">
                            <img class="avatar avatar-xxl mb-3" src="assets/svg/illustrations/oc-error.svg"
                                alt="Image Description" data-hs-theme-appearance="default">
                            <img class="avatar avatar-xxl mb-3" src="assets/svg/illustrations-light/oc-error.svg"
                                alt="Image Description" data-hs-theme-appearance="dark">
                            <p class="card-text">No data to show</p>
                            <a class="btn btn-white btn-sm" href="projects.html">Start your Projects</a>
                        </div>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Col -->
    </div>
@endsection
