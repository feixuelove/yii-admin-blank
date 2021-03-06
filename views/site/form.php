<?php
/**
 * Created by PhpStorm.
 * User: luohuanjun
 * Date: 16/7/22
 * Time: 下午4:22
 */
?>
<form class="form-horizontal" role="form">
    <!-- #section:elements.form -->
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Text Field </label>

        <div class="col-sm-9">
            <input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Full Length </label>

        <div class="col-sm-9">
            <input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control">
        </div>
    </div>

    <!-- /section:elements.form -->
    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Password Field </label>

        <div class="col-sm-9">
            <input type="password" id="form-field-2" placeholder="Password" class="col-xs-10 col-sm-5">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle">Inline help text</span>
											</span>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Readonly field </label>

        <div class="col-sm-9">
            <input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!">
											<span class="help-inline col-xs-12 col-sm-7">
												<label class="middle">
                                                    <input class="ace" type="checkbox" id="id-disable-check">
                                                    <span class="lbl"> Disable it!</span>
                                                </label>
											</span>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-4">Relative Sizing</label>

        <div class="col-sm-9">
            <input class="input-sm" type="text" id="form-field-4" placeholder=".input-sm">
            <div class="space-2"></div>

            <div class="help-block ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="input-size-slider" style="width: 200px;"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span></div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-5">Grid Sizing</label>

        <div class="col-sm-9">
            <div class="clearfix">
                <input class="col-xs-1" type="text" id="form-field-5" placeholder=".col-xs-1">
            </div>

            <div class="space-2"></div>

            <div class="help-block ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" id="input-span-slider"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span></div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Input with Icon</label>

        <div class="col-sm-9">
            <!-- #section:elements.form.input-icon -->
											<span class="input-icon">
												<input type="text" id="form-field-icon-1">
												<i class="ace-icon fa fa-leaf blue"></i>
											</span>

											<span class="input-icon input-icon-right">
												<input type="text" id="form-field-icon-2">
												<i class="ace-icon fa fa-leaf green"></i>
											</span>

            <!-- /section:elements.form.input-icon -->
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-6">Tooltip and help button</label>

        <div class="col-sm-9">
            <input data-rel="tooltip" type="text" id="form-field-6" placeholder="Tooltip on hover" title="" data-placement="bottom" data-original-title="Hello Tooltip!">
            <span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="More details." title="" data-original-title="Popover on hover">?</span>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Tag input</label>

        <div class="col-sm-9">
            <!-- #section:plugins/input.tag-input -->
            <div class="inline"><div class="tags"><span class="tag">Tag Input Control<button type="button" class="close">×</button></span><span class="tag">Programmatically Added<button type="button" class="close">×</button></span><input type="text" name="tags" id="form-field-tags" value="Tag Input Control" placeholder="Enter tags ..." style="display: none;"><input type="text" placeholder="Enter tags ..."></div>

            </div>

            <!-- /section:plugins/input.tag-input -->
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Typeahead.js</label>

        <div class="col-sm-9">
            <!-- #section:plugins/bootstrap.typeahead-js -->
            <div class="pos-rel">
                <span class="twitter-typeahead" style="position: relative; display: inline-block; direction: ltr;"><input class="typeahead scrollable tt-hint" type="text" disabled="" autocomplete="off" spellcheck="false" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input class="typeahead scrollable tt-input" type="text" placeholder="States of USA" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Open Sans&quot;; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"><div class="tt-dataset-states"></div></span></span>
            </div>

            <!-- /section:plugins/bootstrap.typeahead-js -->
        </div>
    </div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="button">
                <i class="ace-icon fa fa-check bigger-110"></i>
                Submit
            </button>

            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                Reset
            </button>
        </div>
    </div>

    <div class="hr hr-24"></div>

    <div class="row">
        <div class="col-xs-12 col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">Text Area</h4>

                    <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                        </a>

                        <a href="#" data-action="close">
                            <i class="ace-icon fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div>
                            <label for="form-field-8">Default</label>

                            <textarea class="form-control" id="form-field-8" placeholder="Default Text"></textarea>
                        </div>

                        <hr>

                        <!-- #section:plugins/input.limiter -->
                        <div>
                            <label for="form-field-9">With Character Limit</label>

                            <textarea class="form-control limited" id="form-field-9" maxlength="50"></textarea>
                        </div>

                        <!-- /section:plugins/input.limiter -->
                        <hr>

                        <!-- #section:plugins/input.autosize -->
                        <div>
                            <label for="form-field-11">Autosize</label>

                            <textarea id="form-field-11" class="autosize-transition form-control" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 52px;"></textarea>
                        </div>

                        <!-- /section:plugins/input.autosize -->
                    </div>
                </div>
            </div>
        </div><!-- /.span -->

        <div class="col-xs-12 col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">Masked Input</h4>

													<span class="widget-toolbar">
														<a href="#" data-action="settings">
                                                            <i class="ace-icon fa fa-cog"></i>
                                                        </a>

														<a href="#" data-action="reload">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                        </a>

														<a href="#" data-action="collapse">
                                                            <i class="ace-icon fa fa-chevron-up"></i>
                                                        </a>

														<a href="#" data-action="close">
                                                            <i class="ace-icon fa fa-times"></i>
                                                        </a>
													</span>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div>
                            <label for="form-field-mask-1">
                                Date
                                <small class="text-success">99/99/9999</small>
                            </label>

                            <!-- #section:plugins/input.masked-input -->
                            <div class="input-group">
                                <input class="form-control input-mask-date" type="text" id="form-field-mask-1">
																<span class="input-group-btn">
																	<button class="btn btn-sm btn-default" type="button">
                                                                        <i class="ace-icon fa fa-calendar bigger-110"></i>
                                                                        Go!
                                                                    </button>
																</span>
                            </div>

                            <!-- /section:plugins/input.masked-input -->
                        </div>

                        <hr>
                        <div>
                            <label for="form-field-mask-2">
                                Phone
                                <small class="text-warning">(999) 999-9999</small>
                            </label>

                            <div class="input-group">
																<span class="input-group-addon">
																	<i class="ace-icon fa fa-phone"></i>
																</span>

                                <input class="form-control input-mask-phone" type="text" id="form-field-mask-2">
                            </div>
                        </div>

                        <hr>
                        <div>
                            <label for="form-field-mask-3">
                                Product Key
                                <small class="text-error">a*-999-a999</small>
                            </label>

                            <div class="input-group">
                                <input class="form-control input-mask-product" type="text" id="form-field-mask-3">
																<span class="input-group-addon">
																	<i class="ace-icon fa fa-key"></i>
																</span>
                            </div>
                        </div>

                        <hr>
                        <div>
                            <label for="form-field-mask-4">
                                Eye Script
                                <small class="text-info">~9.99 ~9.99 999</small>
                            </label>

                            <div>
                                <input class="input-medium input-mask-eyescript" type="text" id="form-field-mask-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.span -->

        <div class="col-xs-12 col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">Select Box</h4>

													<span class="widget-toolbar">
														<a href="#" data-action="settings">
                                                            <i class="ace-icon fa fa-cog"></i>
                                                        </a>

														<a href="#" data-action="reload">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                        </a>

														<a href="#" data-action="collapse">
                                                            <i class="ace-icon fa fa-chevron-up"></i>
                                                        </a>

														<a href="#" data-action="close">
                                                            <i class="ace-icon fa fa-times"></i>
                                                        </a>
													</span>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div>
                            <label for="form-field-select-1">Default</label>

                            <select class="form-control" id="form-field-select-1">
                                <option value=""></option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>

                        <hr>
                        <div>
                            <label for="form-field-select-2">Multiple</label>

                            <select class="form-control" id="form-field-select-2" multiple="multiple">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>

                        <hr>

                        <!-- #section:plugins/input.chosen -->
                        <div>
                            <label for="form-field-select-3">Chosen</label>

                            <br>
                            <select class="chosen-select" id="form-field-select-3" data-placeholder="Choose a State..." style="display: none;">
                                <option value="">  </option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select><div class="chosen-container chosen-container-single" style="width: 283px;" title="" id="form_field_select_3_chosen"><a class="chosen-single chosen-default" tabindex="-1"><span>Choose a State...</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                        </div>

                        <hr>
                        <div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="bigger-110">Multiple</span>
                                </div><!-- /.span -->

                                <div class="col-sm-6">
																	<span class="pull-right inline">
																		<span class="grey">style:</span>

																		<span class="btn-toolbar inline middle no-margin">
																			<span id="chosen-multiple-style" data-toggle="buttons" class="btn-group no-margin">
																				<label class="btn btn-xs btn-yellow active">
                                                                                    1
                                                                                    <input type="radio" value="1">
                                                                                </label>

																				<label class="btn btn-xs btn-yellow">
                                                                                    2
                                                                                    <input type="radio" value="2">
                                                                                </label>
																			</span>
																		</span>
																	</span>
                                </div><!-- /.span -->
                            </div>

                            <div class="space-2"></div>

                            <select multiple="" class="chosen-select" id="form-field-select-4" data-placeholder="Choose a State..." style="display: none;">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select><div class="chosen-container chosen-container-multi" style="width: 283px;" title="" id="form_field_select_4_chosen"><ul class="chosen-choices"><li class="search-field"><input type="text" value="Choose a State..." class="default" autocomplete="off" style="width: 0px;"></li></ul><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>
                        </div>

                        <!-- /section:plugins/input.chosen -->
                    </div>
                </div>
            </div>
        </div><!-- /.span -->
    </div><!-- /.row -->

    <div class="space-24"></div>

    <h3 class="header smaller lighter blue">
        Checkboxes &amp; Radio
        <small>All Checkboxes, Radios and Switch Buttons Are Pure CSS</small>
    </h3>

    <div class="row">
        <div class="col-xs-12 col-sm-5">
            <div class="control-group">
                <label class="control-label bolder blue">Checkbox</label>

                <!-- #section:custom/checkbox -->
                <div class="checkbox">
                    <label>
                        <input name="form-field-checkbox" type="checkbox" class="ace">
                        <span class="lbl"> choice 1</span>
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input name="form-field-checkbox" type="checkbox" class="ace">
                        <span class="lbl"> choice 2</span>
                    </label>
                </div>

                <div class="checkbox">
                    <label>
                        <input name="form-field-checkbox" class="ace ace-checkbox-2" type="checkbox">
                        <span class="lbl"> choice 3</span>
                    </label>
                </div>

                <div class="checkbox">
                    <label class="block">
                        <input name="form-field-checkbox" disabled="" type="checkbox" class="ace">
                        <span class="lbl"> disabled</span>
                    </label>
                </div>

                <!-- /section:custom/checkbox -->
            </div>
        </div>

        <div class="col-xs-12 col-sm-6">
            <div class="control-group">
                <label class="control-label bolder blue">Radio</label>

                <div class="radio">
                    <label>
                        <input name="form-field-radio" type="radio" class="ace">
                        <span class="lbl"> radio option 1</span>
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input name="form-field-radio" type="radio" class="ace">
                        <span class="lbl"> radio option 2</span>
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input name="form-field-radio" type="radio" class="ace">
                        <span class="lbl"> radio option 3</span>
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input disabled="" name="form-field-radio" type="radio" class="ace">
                        <span class="lbl"> disabled</span>
                    </label>
                </div>
            </div>
        </div>
    </div><!-- /.row -->

    <hr>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3">On/Off Switches</label>

        <div class="controls col-xs-12 col-sm-9">
            <!-- #section:custom/checkbox.switch -->
            <div class="row">
                <div class="col-xs-3">
                    <label>
                        <input name="switch-field-1" class="ace ace-switch" type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </div>

                <div class="col-xs-3">
                    <label>
                        <input name="switch-field-1" class="ace ace-switch ace-switch-2" type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </div>

                <div class="col-xs-3">
                    <label>
                        <input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </div>

                <div class="col-xs-3">
                    <label>
                        <input name="switch-field-1" class="ace ace-switch" type="checkbox">
                        <span class="lbl" data-lbl="CUS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOM"></span>
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <label>
                        <input name="switch-field-1" class="ace ace-switch ace-switch-4" type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </div>

                <div class="col-xs-3">
                    <label>
                        <input name="switch-field-1" class="ace ace-switch ace-switch-5" type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </div>

                <div class="col-xs-3">
                    <label>
                        <input name="switch-field-1" class="ace ace-switch ace-switch-6" type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </div>

                <div class="col-xs-3">
                    <label>
                        <input name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-3">
                    <label>
                        <input name="switch-field-1" class="ace ace-switch btn-rotate" type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </div>

                <div class="col-xs-3">
                    <label>
                        <input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-rotate" type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </div>

                <div class="col-xs-3">
                    <label>
                        <input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-empty" type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </div>

                <div class="col-xs-3">
                    <label>
                        <input name="switch-field-1" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox">
                        <span class="lbl"></span>
                    </label>
                </div>
            </div>

            <!-- /section:custom/checkbox.switch -->
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">Custom File Input</h4>

                    <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                        </a>

                        <a href="#" data-action="close">
                            <i class="ace-icon fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <!-- #section:custom/file-input -->
                                <label class="ace-file-input"><input type="file" id="id-input-file-2"><span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <label class="ace-file-input ace-file-multiple"><input multiple="" type="file" id="id-input-file-3"><span class="ace-file-container" data-title="Drop files here or click to choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon ace-icon fa fa-cloud-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>

                                <!-- /section:custom/file-input -->
                            </div>
                        </div>

                        <!-- #section:custom/file-input.filter -->
                        <label>
                            <input type="checkbox" name="file-format" id="id-file-format" class="ace">
                            <span class="lbl"> Allow only images</span>
                        </label>

                        <!-- /section:custom/file-input.filter -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">jQuery UI Sliders</h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="row">
                            <div class="col-xs-3 col-md-2">
                                <!-- #section:plugins/jquery.slider -->
                                <div id="slider-range" class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all" style="height: 200px;"><div class="ui-slider-range ui-widget-header ui-corner-all" style="bottom: 17%; height: 50%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="bottom: 17%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="bottom: 67%;"></span></div>
                            </div>

                            <div class="col-xs-9 col-md-10">
                                <div id="slider-eq">
                                    <span class="ui-slider-green ui-slider-small ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="width: 90%; float: left; margin: 15px;"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 77%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 77%;"></span></span>
                                    <span class="ui-slider-red ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="width: 90%; float: left; margin: 15px;"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 55%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 55%;"></span></span>
                                    <span class="ui-slider-purple ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui-state-disabled ui-slider-disabled" data-rel="tooltip" title="" data-original-title="Disabled!" style="width: 90%; float: left; margin: 15px;"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 33%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 33%;"></span></span>
                                    <span class="ui-slider-simple ui-slider-orange ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="width: 90%; float: left; margin: 15px;"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 40%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 40%;"></span></span>
                                    <span class="ui-slider-simple ui-slider-dark ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="width: 90%; float: left; margin: 15px;"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 88%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 88%;"></span></span>
                                </div>

                                <!-- /section:plugins/jquery.slider -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">Spinners</h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <!-- #section:plugins/fuelux.spinner -->
                        <div class="ace-spinner" style="width: 100px;"><div class="input-group"><input type="text" class="input-mini spinner-input form-control" id="spinner1" maxlength="3"><div class="spinner-buttons input-group-btn btn-group-vertical">					<button type="button" class="btn spinner-up btn-xs btn-info">						<i class=" ace-icon fa fa-chevron-up"></i>					</button>					<button type="button" class="btn spinner-down btn-xs btn-info">						<i class=" ace-icon fa fa-chevron-down"></i>					</button>				</div></div></div>
                        <div class="space-6"></div>

                        <div class="ace-spinner touch-spinner" style="width: 140px;"><div class="input-group"><input type="text" class="input-mini spinner-input form-control" id="spinner2" maxlength="5"><div class="spinner-buttons input-group-btn">					<button type="button" class="btn spinner-up btn-xs ">						<i class=" ace-icon ace-icon fa fa-caret-up"></i>					</button>					<button type="button" class="btn spinner-down btn-xs ">						<i class=" ace-icon ace-icon fa fa-caret-down"></i>					</button>				</div></div></div>
                        <div class="space-6"></div>

                        <div class="ace-spinner touch-spinner" style="width: 100px;"><div class="input-group"><div class="spinner-buttons input-group-btn">					<button type="button" class="btn spinner-down btn-xs btn-danger">						<i class=" ace-icon ace-icon fa fa-minus smaller-75"></i>					</button>				</div><input type="text" class="input-mini spinner-input form-control" id="spinner3" maxlength="3"><div class="spinner-buttons input-group-btn">					<button type="button" class="btn spinner-up btn-xs btn-success">						<i class=" ace-icon ace-icon fa fa-plus smaller-75"></i>					</button>				</div></div></div>

                        <!-- /section:plugins/fuelux.spinner -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">Date Picker</h4>

													<span class="widget-toolbar">
														<a href="#" data-action="settings">
                                                            <i class="ace-icon fa fa-cog"></i>
                                                        </a>

														<a href="#" data-action="reload">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                        </a>

														<a href="#" data-action="collapse">
                                                            <i class="ace-icon fa fa-chevron-up"></i>
                                                        </a>

														<a href="#" data-action="close">
                                                            <i class="ace-icon fa fa-times"></i>
                                                        </a>
													</span>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <label for="id-date-picker-1">Date Picker</label>

                        <div class="row">
                            <div class="col-xs-8 col-sm-11">
                                <!-- #section:plugins/date-time.datepicker -->
                                <div class="input-group">
                                    <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
                                </div>
                            </div>
                        </div>

                        <div class="space space-8"></div>
                        <label>Range Picker</label>

                        <div class="row">
                            <div class="col-xs-8 col-sm-11">
                                <div class="input-daterange input-group">
                                    <input type="text" class="input-sm form-control" name="start">
																	<span class="input-group-addon">
																		<i class="fa fa-exchange"></i>
																	</span>

                                    <input type="text" class="input-sm form-control" name="end">
                                </div>

                                <!-- /section:plugins/date-time.datepicker -->
                            </div>
                        </div>

                        <hr>
                        <label for="id-date-range-picker-1">Date Range Picker</label>

                        <div class="row">
                            <div class="col-xs-8 col-sm-11">
                                <!-- #section:plugins/date-time.daterangepicker -->
                                <div class="input-group">
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>

                                    <input class="form-control" type="text" name="date-range-picker" id="id-date-range-picker-1">
                                </div>

                                <!-- /section:plugins/date-time.daterangepicker -->
                            </div>
                        </div>

                        <hr>
                        <label for="timepicker1">Time Picker</label>

                        <!-- #section:plugins/date-time.timepicker -->
                        <div class="input-group bootstrap-timepicker">
                            <input id="timepicker1" type="text" class="form-control">
															<span class="input-group-addon">
																<i class="fa fa-clock-o bigger-110"></i>
															</span>
                        </div>

                        <!-- /section:plugins/date-time.timepicker -->
                        <hr>
                        <label for="date-timepicker1">Date/Time Picker</label>

                        <!-- #section:plugins/date-time.datetimepicker -->
                        <div class="input-group">
                            <input id="date-timepicker1" type="text" class="form-control">
															<span class="input-group-addon">
																<i class="fa fa-clock-o bigger-110"></i>
															</span>
                        </div>

                        <!-- /section:plugins/date-time.datetimepicker -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">
                        <i class="ace-icon fa fa-tint"></i>
                        Color Picker
                    </h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="clearfix">
                            <label for="colorpicker1">Color Picker</label>
                        </div>

                        <div class="control-group">
                            <div class="bootstrap-colorpicker">
                                <!-- #section:plugins/misc.colorpicker -->
                                <input id="colorpicker1" type="text" class="input-small">

                                <!-- /section:plugins/misc.colorpicker -->
                            </div>
                        </div>

                        <hr>

                        <!-- #section:custom/colorpicker -->
                        <div>
                            <label for="simple-colorpicker-1">Custom Color Picker</label>

                            <select id="simple-colorpicker-1" class="hide">
                                <option value="#ac725e">#ac725e</option>
                                <option value="#d06b64">#d06b64</option>
                                <option value="#f83a22">#f83a22</option>
                                <option value="#fa573c">#fa573c</option>
                                <option value="#ff7537">#ff7537</option>
                                <option value="#ffad46" selected="">#ffad46</option>
                                <option value="#42d692">#42d692</option>
                                <option value="#16a765">#16a765</option>
                                <option value="#7bd148">#7bd148</option>
                                <option value="#b3dc6c">#b3dc6c</option>
                                <option value="#fbe983">#fbe983</option>
                                <option value="#fad165">#fad165</option>
                                <option value="#92e1c0">#92e1c0</option>
                                <option value="#9fe1e7">#9fe1e7</option>
                                <option value="#9fc6e7">#9fc6e7</option>
                                <option value="#4986e7">#4986e7</option>
                                <option value="#9a9cff">#9a9cff</option>
                                <option value="#b99aff">#b99aff</option>
                                <option value="#c2c2c2">#c2c2c2</option>
                                <option value="#cabdbf">#cabdbf</option>
                                <option value="#cca6ac">#cca6ac</option>
                                <option value="#f691b2">#f691b2</option>
                                <option value="#cd74e6">#cd74e6</option>
                                <option value="#a47ae2">#a47ae2</option>
                                <option value="#555">#555</option>
                            </select><div class="dropdown dropdown-colorpicker">		<a data-toggle="dropdown" class="dropdown-toggle" data-position="auto" href="#"><span class="btn-colorpicker" style="background-color:#ffad46"></span></a><ul class="dropdown-menu dropdown-caret"><li><a class="colorpick-btn" href="#" style="background-color:#ac725e;" data-color="#ac725e"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#d06b64;" data-color="#d06b64"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#f83a22;" data-color="#f83a22"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#fa573c;" data-color="#fa573c"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#ff7537;" data-color="#ff7537"></a></li><li><a class="colorpick-btn selected" href="#" style="background-color:#ffad46;" data-color="#ffad46"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#42d692;" data-color="#42d692"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#16a765;" data-color="#16a765"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#7bd148;" data-color="#7bd148"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#b3dc6c;" data-color="#b3dc6c"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#fbe983;" data-color="#fbe983"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#fad165;" data-color="#fad165"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#92e1c0;" data-color="#92e1c0"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#9fe1e7;" data-color="#9fe1e7"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#9fc6e7;" data-color="#9fc6e7"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#4986e7;" data-color="#4986e7"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#9a9cff;" data-color="#9a9cff"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#b99aff;" data-color="#b99aff"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#c2c2c2;" data-color="#c2c2c2"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#cabdbf;" data-color="#cabdbf"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#cca6ac;" data-color="#cca6ac"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#f691b2;" data-color="#f691b2"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#cd74e6;" data-color="#cd74e6"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#a47ae2;" data-color="#a47ae2"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#555;" data-color="#555"></a></li></ul></div>
                        </div>

                        <!-- /section:custom/colorpicker -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">
                        <i class="ace-icon fa fa-tachometer"></i>
                        Knob Input
                    </h4>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="control-group">
                            <div class="row">
                                <div class="col-xs-6 center">
                                    <!-- #section:plugins/charts.knob -->
                                    <div class="knob-container inline">
                                        <div style="display:inline;width:80px;height:80px;"><canvas width="160" height="160" style="width: 80px; height: 80px;"></canvas><input type="text" class="input-small knob" value="15" data-min="0" data-max="100" data-step="10" data-width="80" data-height="80" data-thickness=".2" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 16px; line-height: normal; font-family: Arial; text-align: center; color: rgb(135, 206, 235); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                    </div>
                                </div>

                                <div class="col-xs-6  center">
                                    <div class="knob-container inline">
                                        <div style="display:inline;width:80px;height:80px;"><canvas width="160" height="160" style="width: 80px; height: 80px;"></canvas><input type="text" class="input-small knob" value="41" data-min="0" data-max="100" data-width="80" data-height="80" data-thickness=".2" data-fgcolor="#87B87F" data-displayprevious="true" data-anglearc="250" data-angleoffset="-125" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 16px; line-height: normal; font-family: Arial; text-align: center; color: rgb(135, 184, 127); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                    </div>

                                    <!-- /section:plugins/charts.knob -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 center">
                                    <div class="knob-container inline">
                                        <div style="display:inline;width:150px;height:150px;"><canvas width="300" height="300" style="width: 150px; height: 150px;"></canvas><input type="text" class="input-small knob" value="1" data-min="0" data-max="10" data-width="150" data-height="150" data-thickness=".2" data-fgcolor="#B8877F" data-angleoffset="90" data-cursor="true" style="width: 79px; height: 50px; position: absolute; vertical-align: middle; margin-top: 50px; margin-left: -114px; border: 0px; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 37px; line-height: normal; font-family: Arial; text-align: center; color: rgb(184, 135, 127); padding: 0px; -webkit-appearance: none; background: none;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
