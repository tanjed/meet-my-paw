@extends('layouts.master')
@section('content')

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="app-overlay"></div>
    <div id="shadow-dom" class="view-wrap p-5">
        <div class="row">

        </div>
        <div id="general-settings" class="settings-section is-active">
            <div class="settings-panel">
                <div class="settings-form-wrapper">
                    <form action="/update-profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="settings-form">
                        <div class="columns is-multiline">

                            <div class="column is-6">
                                <!--Field-->
                                <div class="field field-group">
                                    <label>First Name</label>
                                    <div class="control has-icon">
                                        <input type="text" class="input is-fade" value="{{ $user->first_name }}" name="first_name">
                                        <div class="form-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--Field-->
                                <div class="field field-group">
                                    <label>Email</label>
                                    <div class="control has-icon">
                                        <input type="text" class="input is-fade" value="{{ $user->email }}" name="email">
                                        <div class="form-icon">
                                            <i data-feather="mail"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-6">
                                <!--Field-->
                                <div class="field field-group">
                                    <label>Last Name</label>
                                    <div class="control has-icon">
                                        <input type="text" class="input is-fade" value="{{ $user->last_name }}" name="last_name">
                                        <div class="form-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <!--Field-->
                                <div class="field field-group">
                                    <label>Phone</label>
                                    <div class="control has-icon">
                                        <input type="telephone" class="input is-fade" value="" name="phone">
                                        <div class="form-icon">
                                            <i data-feather="phone"></i>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="column is-12">
                                <!--Field-->
                                <div class="field field-group">
                                    <label>Address</label>
                                    <div class="control">
                                        <textarea type="text" class="textarea is-fade" rows="1"
                                            placeholder="Fill in your address..." name="address"></textarea>
                                    </div>
                                </div>
                            </div>



                            <div class="column is-6">
                                <!--Field-->
                                <div class="field field-group">
                                    <label>City</label>
                                    <div class="control has-icon">
                                        <input type="text" class="input is-fade" value="Melbourne" name="city">
                                        <div class="form-icon">
                                            <i data-feather="map-pin"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-6">
                                <!--Field-->
                                <div class="field field-group is-autocomplete">
                                    <label>Country</label>
                                    <div class="control has-icon">
                                        <input id="country-autocpl" type="text" class="input is-fade" name="country" value="Australia">
                                        <div class="form-icon">
                                            <i data-feather="globe"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <!--Field-->
                                <div class="field field-group">
                                    <label>Profile Pic</label>
                                    <div class="control has-icon">
                                        <input type="file" class="input is-fade" value="" name="profile_pic">
                                        <div class="form-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <!--Field-->
                                <div class="field field-group is-autocomplete">
                                    <label>Cover Photo</label>
                                    <div class="control has-icon">
                                        <input id="country-autocpl" type="file" class="input is-fade" value="" name="cover_pic">
                                        <div class="form-icon">
                                            <i data-feather="globe"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-12">
                                <!--Field-->
                                <div class="field field-group">
                                    <label>BIO</label>
                                    <div class="control">
                                        <textarea type="text" class="textarea is-fade" rows="1"
                                            placeholder="Fill in your address..." name="bio"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-12">
                                <div class="buttons">
                                    <button class="button is-solid accent-button form-button">Save Changes</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
@endsection
