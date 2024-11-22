@extends('layouts.transporter.dashboard.app')

@section('head_css')
    <style>
        .notification-settings {
            border: 1px solid #DADADA;
            border-radius: 8px;
            padding: 20px 25px;
            max-width: 550px;
            margin: auto;
        }

        .notification-settings ul {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            gap: 15px;
        }

        .notification-settings ul li {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .switch {
            display: inline-block;
            position: relative;
            width: 60px;
            height: 30px;
            border-radius: 20px;
            background: #c3c3c3;
            transition: background 0.28s cubic-bezier(0.4, 0, 0.2, 1);
            vertical-align: middle;
            cursor: pointer;
            margin-bottom: 0;
        }

        .switch::before {
            content: '';
            position: absolute;
            top: 4px;
            left: 5px;
            width: 22px;
            height: 22px;
            background: #fafafa;
            border-radius: 50%;
            transition: left 0.28s cubic-bezier(0.4, 0, 0.2, 1), background 0.28s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .switch:active::before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.28), 0 0 0 20px rgba(128, 128, 128, 0.1);
        }

        input:checked+.switch {
            background: #0356D6;
        }

        input:checked+.switch::before {
            left: 33px;
            background: #fff;
        }

        input:checked+.switch:active::before {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.28), 0 0 0 20px rgba(0, 150, 136, 0.2);
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/globle.css') }}" />
@endsection


@section('content')
    <div id="wrapper">
        <!-- SIDEBAR -->
        @include('layouts.transporter.dashboard.sidebar')
        <div id="page-content-wrapper">
            @include('layouts.transporter.dashboard.top_head')
            <!-- content part -->
            <div class="content_container adjust_spacing">
                <div class="inner_content set_banner_position">
                    <div class="wd-white-box">
                        <div class="admin_job_top flex-column header-banner">
                            <h3 class="mb-md-3">Notifications</h3>
                            <p class="pera_srch">Manage your notification preferences</p>
                        </div>
                        <div class="notification-settings">
                            <ul>
                                <li>
                                    <span>Email alerts</span>
                                    <input type="checkbox" id="job_email_preference" name="" value="1"
                                        {{ $data->job_email_preference == 1 ? 'checked' : '' }} style="opacity: 0; z-index: -1;">
                                    <label class="switch" for="job_email_preference	"></label>
                                </li>
                                <li>
                                    <span>SMS alerts</span>
                                    <input type="checkbox" id="sms_alerts" name="sms_alerts"
                                        value="1" {{ $data->sms_alerts == 1 ? 'checked' : '' }} style="opacity: 0; z-index: -1;">
                                    <label class="switch" for="sms_alerts"></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/web/js/admin.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Attach change event to checkboxes
            $('input[type="checkbox"]').change(function() {
                // Gather the checkbox values
                var job_email_preference = $('#job_email_preference').is(':checked') ? 1 : 0;
                var sms_alerts = $('#sms_alerts').is(':checked') ? 1 : 0;
               
                // Send the AJAX request
               
                $.ajax({
                    url: "{{ route('front.updateManageNotification') }}",
                    method: "POST",
                    data: {
                        job_email_preference: job_email_preference,
                        sms_alerts: sms_alerts,
                        _token: '{{ csrf_token() }}' // Include CSRF token
                    },
                    success: function(response) {
                        toastr.success(response.message); // Optional: Notify the user of success
                    },
                    error: function(xhr) {
                        var errorMessage = xhr.responseJSON.message ||
                            'An error occurred while saving preferences.';
                            toastr.error(response.message);
                    }
                });
            });
        });
    </script>
@endsection
