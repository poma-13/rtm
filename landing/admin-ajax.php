
.frm_hidden,
.with_frm_style .frm_button.frm_hidden{
    display:none;
}

#frm_verify{
	display:none !important;
}

.with_frm_style fieldset{
	min-width:0;
}

legend.frm_hidden{
    display:none !important;
}

.with_frm_style .frm_form_fields{
	opacity:1;
	transition: opacity 0.1s linear;
}
.with_frm_style .frm_doing_ajax{
	opacity:.5;
}

.frm_transparent{
	color:transparent;
}

.input[type=file].frm_transparent:focus, .with_frm_style input[type=file]{
	background-color:transparent;
	border:none;
	outline:none;
	box-shadow:none;
}

.with_frm_style input[type=file]{
	display:initial;
}

.frm_preview_page:before{
    content:normal !important;
}

.frm_preview_page{
    padding:25px;
}

.with_frm_style .form-field.frm_col_field{
    clear:none;
    float:left;
    margin-right:20px;
}

.with_frm_style label.frm_primary_label{
    max-width:100%;
}

.with_frm_style .frm_top_container label.frm_primary_label,
.with_frm_style .frm_hidden_container label.frm_primary_label,
.with_frm_style .frm_pos_top{
    display:block;
    float:none;
    width:auto;
}

.with_frm_style .frm_inline_container label.frm_primary_label{
    margin-right:10px;
}

.with_frm_style .frm_right_container label.frm_primary_label,
.with_frm_style .frm_pos_right{
    display:inline;
    float:right;
    margin-left:10px;
}

.with_frm_style .frm_none_container label.frm_primary_label,
.with_frm_style .frm_pos_none,
.frm_none_container label.frm_primary_label{
    display:none;
}

.with_frm_style .frm_section_heading.frm_hide_section{
	margin-top:0 !important;
}

.with_frm_style .frm_hidden_container label.frm_primary_label,
.with_frm_style .frm_pos_hidden,
.frm_hidden_container label.frm_primary_label{
    visibility:hidden;
}

.with_frm_style .frm_description{
	clear:both;
}

.with_frm_style .frm_scale{
    margin-right:10px;
    text-align:center;
    float:left;
}

.with_frm_style .frm_scale input{
    display:block;
	margin:0;
}

.with_frm_style input[type=number][readonly]{
    -moz-appearance: textfield;
}

.with_frm_style select[multiple="multiple"]{
    height:auto;
    line-height:normal;
}

.with_frm_style select{
	white-space:pre-wrap;
}

.with_frm_style .frm_catlevel_2,
.with_frm_style .frm_catlevel_3,
.with_frm_style .frm_catlevel_4,
.with_frm_style .frm_catlevel_5{
    margin-left:18px;
}

.with_frm_style .wp-editor-container{
    border:1px solid #e5e5e5;
}

.with_frm_style .quicktags-toolbar input{
    font-size:12px !important;
}

.with_frm_style .wp-editor-container textarea{
    border:none;
}

.with_frm_style textarea{
    height:auto;
}

.with_frm_style .auto_width #loginform input,
.with_frm_style .auto_width input,
.with_frm_style input.auto_width,
.with_frm_style select.auto_width,
.with_frm_style textarea.auto_width{
    width:auto;
}

.with_frm_style .frm_repeat_buttons{
	white-space:nowrap;
}

.with_frm_style .frm_button{
    text-decoration:none;
    border:1px solid #eee;
	padding:5px;
	display:inline;
}

.with_frm_style .frm_submit{
    clear:both;
}

.frm_inline_form .frm_form_field.form-field{
    margin-right:2.5%;
	display:inline-block;
}

.frm_inline_form .frm_submit{
	display:inline-block;
}

.with_frm_style.frm_center_submit .frm_submit{
    text-align:center;
}

.with_frm_style.frm_center_submit .frm_submit input[type=submit],
.with_frm_style.frm_center_submit .frm_submit input[type=button],
.with_frm_style.frm_center_submit .frm_submit button{
    margin-bottom:8px !important;
}

.with_frm_style .frm_submit input[type=submit],
.with_frm_style .frm_submit input[type=button],
.with_frm_style .frm_submit button{
	-webkit-appearance: none;
	cursor: pointer;
}

.with_frm_style.frm_center_submit .frm_submit .frm_ajax_loading{
    display: block;
    margin: 0 auto;
}

.with_frm_style .frm_loading_form .frm_ajax_loading{
	/* keep this for reverse compatibility for old HTML */
	visibility:visible !important;
}

.with_frm_style .frm_loading_form .frm_button_submit {
    position: relative;
    opacity: .8;
    color: transparent !important;
    text-shadow: none !important;
}

.with_frm_style .frm_loading_form .frm_button_submit:hover,
.with_frm_style .frm_loading_form .frm_button_submit:active,
.with_frm_style .frm_loading_form .frm_button_submit:focus {
    cursor: not-allowed;
    color: transparent;
    outline: none !important;
    box-shadow: none;
}

.with_frm_style .frm_loading_form .frm_button_submit:before {
    content: '';
    display: inline-block;

    position: absolute;
    background: transparent;
    border: 1px solid #fff;
    border-top-color: transparent;
    border-left-color: transparent;
    border-radius: 50%;

    box-sizing: border-box;
        top: 50%;
    left: 50%;
    margin-top: -10px;
    margin-left: -10px;
    width: 20px;
    height: 20px;

    -webkit-animation: spin 2s linear infinite;
    -moz-animation:    spin 2s linear infinite;
    -o-animation:      spin 2s linear infinite;
    animation:         spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}


.frm_forms.frm_style_formidable-style.with_frm_style{
    max-width:100%;
    direction:ltr;
        }

.frm_style_formidable-style.with_frm_style,
.frm_style_formidable-style.with_frm_style form,
.frm_style_formidable-style.with_frm_style .frm-show-form div.frm_description p {
    text-align:left;
}


.frm_style_formidable-style.with_frm_style fieldset{
	border-width:0px;
	border-style:solid;
	border-color:#000000;
    margin:0;
    padding:0 0 15px 0;
	background-color:transparent;
	font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
}

.frm_style_formidable-style.with_frm_style legend + h3,
.frm_style_formidable-style.with_frm_style h3.frm_form_title{
    font-size:20px;
    color:#444444;
	font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
	margin-top:10px;
	margin-bottom:10px;
}

.frm_style_formidable-style.with_frm_style .frm-show-form  .frm_section_heading h3{
    padding:15px 0 3px 0;
    margin:0;
    font-size:18px;
	font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
    font-weight:bold;
    color:#444444;
    border:none;
    border-top:2px solid #e8e8e8;
    background-color:transparent}

.frm_style_formidable-style.with_frm_style h3 .frm_after_collapse{
    display:inline;
}
.frm_style_formidable-style.with_frm_style h3 .frm_before_collapse{
    display:none;
}

.menu-edit #post-body-content .frm_style_formidable-style.with_frm_style .frm_section_heading h3{
    margin:0;
}

.frm_style_formidable-style.with_frm_style .frm_section_heading{
    margin-top:15px;
}

.frm_style_formidable-style.with_frm_style  .frm-show-form .frm_section_heading .frm_section_spacing,
.menu-edit #post-body-content .frm_style_formidable-style.with_frm_style  .frm-show-form .frm_section_heading .frm_section_spacing{
    margin-bottom:12px;
}

.frm_style_formidable-style.with_frm_style .frm_repeat_sec{
	margin-bottom:20px;
	margin-top:20px;
}

.frm_style_formidable-style.with_frm_style label.frm_primary_label,
.frm_style_formidable-style.with_frm_style.frm_login_form label{
    font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
    font-size:14px;
    color:#444444;
    font-weight:bold;
    text-align:left;
    margin:0;
    padding:0 0 3px 0;
    width:auto;
    display:block;
}

.frm_style_formidable-style.with_frm_style .frm_form_field.frm_html_container,
.frm_style_formidable-style.with_frm_style .frm_form_field .frm_show_it{
	font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
	color:#666666;
}

.frm_style_formidable-style.with_frm_style .frm_form_field.frm_html_container{
	font-size:14px;
}

.frm_style_formidable-style.with_frm_style .frm_form_field .frm_show_it{
	font-size:14px;
	font-weight:normal;
}

.frm_style_formidable-style.with_frm_style .frm_icon_font{
    color:#444444;
}

.frm_style_formidable-style.with_frm_style .frm_icon_font.frm_minus_icon:before{
	content:"\e600";
}

.frm_style_formidable-style.with_frm_style .frm_icon_font.frm_plus_icon:before{
	content:"\e602";
}

.frm_style_formidable-style.with_frm_style .frm_icon_font.frm_minus_icon:before,
.frm_style_formidable-style.with_frm_style .frm_icon_font.frm_plus_icon:before{
	color:#444444;
}

.frm_style_formidable-style.with_frm_style .frm_trigger.active .frm_icon_font.frm_arrow_icon:before{
	content:"\e62d";
	color:#444444;
}

.frm_style_formidable-style.with_frm_style .frm_trigger .frm_icon_font.frm_arrow_icon:before{
	content:"\e62a";
	color:#444444;
}

.frm_style_formidable-style.with_frm_style .form-field{
	margin-bottom:20px;
}
.frm_style_formidable-style.with_frm_style .frm_grid,
.frm_style_formidable-style.with_frm_style .frm_grid_first,
.frm_style_formidable-style.with_frm_style .frm_grid_odd {
    margin-bottom:0;
}
.frm_style_formidable-style.with_frm_style .form-field.frm_section_heading{
    margin-bottom:0;
}

.frm_style_formidable-style.with_frm_style p.description,
.frm_style_formidable-style.with_frm_style div.description,
.frm_style_formidable-style.with_frm_style div.frm_description,
.frm_style_formidable-style.with_frm_style .frm-show-form > div.frm_description,
.frm_style_formidable-style.with_frm_style .frm_error{
    margin:0;
    padding:0;
    font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
    font-size:12px;
    color:#666666;
    font-weight:normal;
    text-align:left;
    font-style:normal;
    max-width:100%;
}

/* Form description */
.frm_style_formidable-style.with_frm_style .frm-show-form div.frm_description p{
    font-size:14px;
    color:#666666;
	margin-top:10px;
	margin-bottom:25px;

}


/* Left and right labels */
.frm_style_formidable-style.with_frm_style .frm_left_container label.frm_primary_label{
	float:left;
	display:inline;
	width:150px;
	max-width:33%;
	margin-right:10px;
}

.frm_style_formidable-style.with_frm_style .frm_right_container label.frm_primary_label{
	display:inline;
	width:150px;
	max-width:33%;
	margin-left:10px;
}

.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container input:not([type=radio]):not([type=checkbox]),
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container:not(.frm_dynamic_select_container) select,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container textarea,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .frm_opt_container,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .frm-g-recaptcha,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .g-recaptcha,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .chosen-container,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container input:not([type=radio]):not([type=checkbox]),
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container:not(.frm_dynamic_select_container) select,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container textarea,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .frm_opt_container,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .g-recaptcha,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .frm-g-recaptcha,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .chosen-container{
	max-width:62%;
}

.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .frm_combo_inputs_container .frm_form_field input,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .frm_combo_inputs_container .frm_form_field select,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .frm_combo_inputs_container .frm_form_field input,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .frm_combo_inputs_container .frm_form_field select{
	max-width:100%;
}

.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .frm_opt_container,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .frm_opt_container,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .g-recaptcha,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .g-recaptcha,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .frm-g-recaptcha,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .frm-g-recaptcha{
	display:inline-block;
}

.frm_style_formidable-style.with_frm_style .frm_left_container > p.description::before,
.frm_style_formidable-style.with_frm_style .frm_left_container > div.description::before,
.frm_style_formidable-style.with_frm_style .frm_left_container > div.frm_description::before,
.frm_style_formidable-style.with_frm_style .frm_left_container > .frm_error::before,
.frm_style_formidable-style.with_frm_style .frm_right_container > p.description::after,
.frm_style_formidable-style.with_frm_style .frm_right_container > div.description::after,
.frm_style_formidable-style.with_frm_style .frm_right_container > div.frm_description::after,
.frm_style_formidable-style.with_frm_style .frm_right_container > .frm_error::after{
	content:'';
	display:inline-block;
	width:150px;
	max-width:33%;
	margin-right:10px;
}

.frm_style_formidable-style.with_frm_style .frm_left_container.frm_inline label.frm_primary_label{
	max-width:90%;
}

.frm_style_formidable-style.with_frm_style .form-field.frm_col_field div.frm_description{
	width:100%;
    max-width:100%;
}

.frm_style_formidable-style.with_frm_style .frm_inline_container label.frm_primary_label,
.frm_style_formidable-style.with_frm_style .frm_inline_container.frm_dynamic_select_container .frm_opt_container{
    display:inline;
}

.frm_style_formidable-style.with_frm_style .frm_inline_container label.frm_primary_label{
	margin-right:10px;
}

.frm_style_formidable-style.with_frm_style .frm_pos_right{
    display:inline;
    width:150px;
}

.frm_style_formidable-style.with_frm_style .frm_none_container label.frm_primary_label,
.frm_style_formidable-style.with_frm_style .frm_pos_none{
    display:none;
}

.frm_style_formidable-style.with_frm_style .frm_scale label{
    font-weight:normal;
    font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
    font-size:13px;
    color:#444444;
}

.frm_style_formidable-style.with_frm_style .frm_required{
    color:#B94A48;
    font-weight:bold;
}

.frm_style_formidable-style.with_frm_style input[type=text],
.frm_style_formidable-style.with_frm_style input[type=password],
.frm_style_formidable-style.with_frm_style input[type=email],
.frm_style_formidable-style.with_frm_style input[type=number],
.frm_style_formidable-style.with_frm_style input[type=url],
.frm_style_formidable-style.with_frm_style input[type=tel],
.frm_style_formidable-style.with_frm_style input[type=search],
.frm_style_formidable-style.with_frm_style select,
.frm_style_formidable-style.with_frm_style textarea,
.frm_style_formidable-style.with_frm_style .chosen-container{
	font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
    font-size:14px;
    margin-bottom:0;
}

.frm_style_formidable-style.with_frm_style input[type=text],
.frm_style_formidable-style.with_frm_style input[type=password],
.frm_style_formidable-style.with_frm_style input[type=email],
.frm_style_formidable-style.with_frm_style input[type=number],
.frm_style_formidable-style.with_frm_style input[type=url],
.frm_style_formidable-style.with_frm_style input[type=tel],
.frm_style_formidable-style.with_frm_style input[type=phone],
.frm_style_formidable-style.with_frm_style input[type=search],
.frm_style_formidable-style.with_frm_style select,
.frm_style_formidable-style.with_frm_style textarea,
.frm_form_fields_style,
.frm_style_formidable-style.with_frm_style .frm_scroll_box .frm_opt_container,
.frm_form_fields_active_style,
.frm_form_fields_error_style,
.frm_style_formidable-style.with_frm_style .chosen-container-multi .chosen-choices,
.frm_style_formidable-style.with_frm_style .chosen-container-single .chosen-single{
    color:#555555;
	background-color:#ffffff;
    border-color: #cccccc;
    border-width:1px;
    border-style:solid;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    border-radius:4px;
    width:100%;
    max-width:100%;
    font-size:14px;
    padding:6px 10px;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
    outline:none;
    font-weight:normal;
    box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset;
}

.frm_style_formidable-style.with_frm_style input[type=file]::-webkit-file-upload-button{
    color:#555555;
	background-color:#ffffff;
	padding:6px 10px;
	border-radius:4px;
	border-color: #cccccc;
	border-width:1px;
	border-style:solid;
}

.frm_style_formidable-style.with_frm_style input[type=text],
.frm_style_formidable-style.with_frm_style input[type=password],
.frm_style_formidable-style.with_frm_style input[type=email],
.frm_style_formidable-style.with_frm_style input[type=number],
.frm_style_formidable-style.with_frm_style input[type=url],
.frm_style_formidable-style.with_frm_style input[type=tel],
.frm_style_formidable-style.with_frm_style input[type=file],
.frm_style_formidable-style.with_frm_style input[type=search],
.frm_style_formidable-style.with_frm_style select{
    height:32px;
    line-height:1.3;
}

.frm_style_formidable-style.with_frm_style select[multiple="multiple"]{
    height:auto ;
}

.frm_style_formidable-style.with_frm_style input[type=file]{
    color: #555555;
    padding:0px;
    font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
    font-size:14px;
}

.frm_style_formidable-style.with_frm_style input[type=file].frm_transparent{
    color:transparent;
}

.frm_style_formidable-style.with_frm_style .frm_default,
.frm_style_formidable-style.with_frm_style .placeholder,
.frm_style_formidable-style.with_frm_style .chosen-container-multi .chosen-choices li.search-field .default,
.frm_style_formidable-style.with_frm_style .chosen-container-single .chosen-default{
    color: #555555;
    font-style:italic;
}

.frm_style_formidable-style.with_frm_style select{
    width:100%;
    max-width:100%;
}

.frm_style_formidable-style.with_frm_style input.frm_other_input:not(.frm_other_full){
    width:auto ;
    margin-left:5px ;
}

.frm_style_formidable-style.with_frm_style .frm_full input.frm_other_input:not(.frm_other_full){
    margin-left:0 ;
    margin-top:8px;
}

.frm_style_formidable-style.with_frm_style .frm_other_container select:not([multiple="multiple"]){
    width:auto;
}

.frm_style_formidable-style.with_frm_style .wp-editor-wrap{
    width:100%;
    max-width:100%;
}

.frm_style_formidable-style.with_frm_style .wp-editor-container textarea{
    border:none;
}

.frm_style_formidable-style.with_frm_style .mceIframeContainer{
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style .auto_width input,
.frm_style_formidable-style.with_frm_style input.auto_width,
.frm_style_formidable-style.with_frm_style select.auto_width,
.frm_style_formidable-style.with_frm_style textarea.auto_width{
    width:auto;
}

.frm_style_formidable-style.with_frm_style input[disabled],
.frm_style_formidable-style.with_frm_style select[disabled],
.frm_style_formidable-style.with_frm_style textarea[disabled],
.frm_style_formidable-style.with_frm_style input[readonly],
.frm_style_formidable-style.with_frm_style select[readonly],
.frm_style_formidable-style.with_frm_style textarea[readonly]{
	background-color:#ffffff;
    color: #A1A1A1;
    border-color:#E5E5E5;
}

/* These do not work if they are combined */
.frm_style_formidable-style.with_frm_style input::placeholder{
	color: #A1A1A1;
}
.frm_style_formidable-style.with_frm_style input::-webkit-input-placeholder{
	color: #A1A1A1;
}
.frm_style_formidable-style.with_frm_style input::-moz-placeholder{
	color: #A1A1A1;
}
.frm_style_formidable-style.with_frm_style input:-ms-input-placeholder{
	color: #A1A1A1;
}
.frm_style_formidable-style.with_frm_style input:-moz-placeholder{
	color: #A1A1A1;
}


.frm_style_formidable-style.with_frm_style .form-field input:not([type=file]):focus,
.frm_style_formidable-style.with_frm_style select:focus,
.frm_style_formidable-style.with_frm_style textarea:focus,
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=text],
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=password],
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=email],
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=number],
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=url],
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=tel],
.frm_style_formidable-style.with_frm_style .frm_focus_field input[type=search],
.frm_form_fields_active_style,
.frm_style_formidable-style.with_frm_style .chosen-container-active .chosen-choices{
	background-color:#ffffff;
    border-color:#66afe9;
        box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102,175,233, 0.6);
    }

.frm_style_formidable-style.with_frm_style .frm_submit.frm_inline_submit::before {
	content:"before";
	font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
	font-size:14px;
	color:#444444;
	font-weight:bold;
	margin:0;
	padding:0 0 3px 0;
	width:auto;
	display:block;
	visibility:hidden;
}

.frm_style_formidable-style.with_frm_style .frm_submit.frm_inline_submit input,
.frm_style_formidable-style.with_frm_style .frm_submit.frm_inline_submit button {
	margin-top: 0 ;
}

.frm_style_formidable-style.with_frm_style .frm_compact .frm_dropzone.dz-clickable .dz-message,
.frm_style_formidable-style.with_frm_style input[type=submit],
.frm_style_formidable-style.with_frm_style .frm_submit input[type=button],
.frm_style_formidable-style.with_frm_style .frm_submit button,
.frm_form_submit_style,
.frm_style_formidable-style.with_frm_style.frm_login_form input[type=submit]{
    width:auto;
    font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
    font-size:14px;
    height:auto;
    line-height:normal;
    text-align:center;
    background: #ffffff;
    border-width:1px;
    border-color: #cccccc;
    border-style:solid;
    color:#444444;
    cursor:pointer;
    font-weight:normal;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    border-radius:4px;
    text-shadow:none;
    padding:6px 11px;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
    -ms-box-sizing:border-box;
	    -moz-box-shadow:0 1px 1px #eeeeee;
    -webkit-box-shadow:0 1px 1px #eeeeee;
    box-shadow:0 1px 1px #eeeeee;
		margin:10px;
	margin-left:0;
	margin-right:0;
    vertical-align:middle;
}

.frm_style_formidable-style.with_frm_style .frm_compact .frm_dropzone.dz-clickable .dz-message{
	margin:0;
}

.frm_style_formidable-style.with_frm_style input[type=submit]:hover,
.frm_style_formidable-style.with_frm_style .frm_submit input[type=button]:hover,
.frm_style_formidable-style.with_frm_style .frm_submit button:hover,
.frm_style_formidable-style.with_frm_style.frm_login_form input[type=submit]:hover{
    background: #efefef;
    border-color: #cccccc;
    color: #444444;
}

.frm_style_formidable-style.with_frm_style.frm_center_submit .frm_submit .frm_ajax_loading{
    margin-bottom:10px;
}

.frm_style_formidable-style.with_frm_style input[type=submit]:focus,
.frm_style_formidable-style.with_frm_style .frm_submit input[type=button]:focus,
.frm_style_formidable-style.with_frm_style .frm_submit button:focus,
.frm_style_formidable-style.with_frm_style.frm_login_form input[type=submit]:focus,
.frm_style_formidable-style.with_frm_style input[type=submit]:active,
.frm_style_formidable-style.with_frm_style .frm_submit input[type=button]:active,
.frm_style_formidable-style.with_frm_style .frm_submit button:active,
.frm_style_formidable-style.with_frm_style.frm_login_form input[type=submit]:active{
    background: #efefef;
    border-color: #cccccc;
    color: #444444;
}

.frm_style_formidable-style.with_frm_style .frm_loading_form .frm_button_submit,
.frm_style_formidable-style.with_frm_style .frm_loading_form .frm_button_submit:hover,
.frm_style_formidable-style.with_frm_style .frm_loading_form .frm_button_submit:active,
.frm_style_formidable-style.with_frm_style .frm_loading_form .frm_button_submit:focus{
	color: transparent ;
}

.frm_style_formidable-style.with_frm_style .frm_loading_form .frm_button_submit:before {
	border-bottom-color: #444444;
	border-right-color: #444444;
	max-height:auto;
	max-width:auto;
}

.frm_style_formidable-style.with_frm_style a.frm_save_draft{
    font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
    font-size:14px;
    font-weight:normal;
}

.frm_style_formidable-style.with_frm_style #frm_field_cptch_number_container{
    font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
    font-size:14px;
    color:#444444;
    font-weight:bold;
    clear:both;
}

.frm_style_formidable-style.with_frm_style .frm_radio{
    display:block;
}

.frm_style_formidable-style.with_frm_style .horizontal_radio .frm_radio{
    margin:0 5px 0 0;
}

.frm_style_formidable-style.with_frm_style .frm_checkbox{
    display:block;
}

.frm_style_formidable-style.with_frm_style .vertical_radio .frm_checkbox,
.frm_style_formidable-style.with_frm_style .vertical_radio .frm_radio,
.vertical_radio .frm_catlevel_1{
	display:block;
}

.frm_style_formidable-style.with_frm_style .horizontal_radio .frm_checkbox,
.frm_style_formidable-style.with_frm_style .horizontal_radio .frm_radio,
.horizontal_radio .frm_catlevel_1{
    display:inline-block;
}

.frm_style_formidable-style.with_frm_style .frm_radio label,
.frm_style_formidable-style.with_frm_style .frm_checkbox label{
    font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
    font-size:13px;
    color:#444444;
    font-weight:normal;
    display:inline;
	white-space:normal;
}

.frm_style_formidable-style.with_frm_style .frm_blank_field input[type=text],
.frm_style_formidable-style.with_frm_style .frm_blank_field input[type=password],
.frm_style_formidable-style.with_frm_style .frm_blank_field input[type=url],
.frm_style_formidable-style.with_frm_style .frm_blank_field input[type=tel],
.frm_style_formidable-style.with_frm_style .frm_blank_field input[type=number],
.frm_style_formidable-style.with_frm_style .frm_blank_field input[type=email],
.frm_style_formidable-style.with_frm_style .frm_blank_field textarea,
.frm_style_formidable-style.with_frm_style .frm_blank_field .mce-edit-area iframe,
.frm_style_formidable-style.with_frm_style .frm_blank_field select,
.frm_form_fields_error_style,
.frm_style_formidable-style.with_frm_style .frm_blank_field .frm-g-recaptcha iframe,
.frm_style_formidable-style.with_frm_style .frm_blank_field .g-recaptcha iframe,
.frm_style_formidable-style.with_frm_style .frm_blank_field .chosen-container-multi .chosen-choices,
.frm_style_formidable-style.with_frm_style .frm_form_field :invalid{
    color:#444444;
	background-color:#ffffff;
    border-color:#B94A48;
    border-width:1px;
    border-style:solid;
}

.frm_style_formidable-style.with_frm_style .frm_error{
    font-weight:bold;
}

.frm_style_formidable-style.with_frm_style .frm_blank_field label,
.frm_style_formidable-style.with_frm_style .frm_error{
    color:#B94A48;
}

.frm_style_formidable-style.with_frm_style .frm_error_style{
	background-color:#F2DEDE;
    border:1px solid #EBCCD1;
	border-radius:4px;
    color: #B94A48;
    font-size:14px;
    margin:0;
    margin-bottom:20px;
}

.frm_style_formidable-style.with_frm_style .frm_message,
.frm_success_style{
    border:1px solid #D6E9C6;
	background-color:#DFF0D8;
	color:#468847;
	border-radius:4px;
}

.frm_style_formidable-style.with_frm_style .frm_message p{
	color:#468847;
}

.frm_style_formidable-style.with_frm_style .frm_message{
    margin:5px 0 15px;
    font-size:14px;
}

.frm_style_formidable-style.with_frm_style .frm-grid td,
.frm-grid th{
    border-color:#cccccc;
}

.form_results.frm_style_formidable-style.with_frm_style{
    border:1px solid #cccccc;
}

.form_results.frm_style_formidable-style.with_frm_style tr td{
    color: #555555;
    border-top:1px solid #cccccc;
}

.form_results.frm_style_formidable-style.with_frm_style tr.frm_even,
.frm-grid .frm_even{
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style #frm_loading .progress-striped .progress-bar{
    background-image:linear-gradient(45deg, #cccccc 25%, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 0) 50%, ##cccccc 50%, #cccccc 75%, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0));
}

.frm_style_formidable-style.with_frm_style #frm_loading .progress-bar{
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_grid,
.frm_style_formidable-style.with_frm_style .frm_grid_first,
.frm_style_formidable-style.with_frm_style .frm_grid_odd{
    border-color: #cccccc;
}

.frm_style_formidable-style.with_frm_style .frm_grid.frm_blank_field,
.frm_style_formidable-style.with_frm_style .frm_grid_first.frm_blank_field,
.frm_style_formidable-style.with_frm_style .frm_grid_odd.frm_blank_field{
	background-color:#F2DEDE;
    border-color:#EBCCD1;
}

.frm_style_formidable-style.with_frm_style .frm_grid_first,
.frm_style_formidable-style.with_frm_style .frm_grid_odd{
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_grid{
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_form_field.frm_html_scroll_box{
	background-color:#ffffff;
    border-color: #cccccc;
    border-width:1px;
    border-style:solid;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    border-radius:4px;
    width:100%;
    font-size:14px;
    padding:6px 10px;
    outline:none;
}

.frm_style_formidable-style.with_frm_style .frm_form_field.frm_total input,
.frm_style_formidable-style.with_frm_style .frm_form_field.frm_total textarea{
    color: #555555;
    background-color:transparent;
    border:none;
    display:inline;
	width:auto;
	padding:0;
}

.frm_style_formidable-style.with_frm_style .frm_text_block input,
.frm_style_formidable-style.with_frm_style .frm_text_block label.frm_primary_label{
    margin-left:-20px;
}

.frm_style_formidable-style.with_frm_style .frm_button{
    padding:6px 11px;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    border-radius:4px;
    font-size:14px;
    font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,sans-serif;
    font-weight:normal;
    color:#444444;
    background: #ffffff;
    border-width:1px;
    border-color: #cccccc;
	height:auto;
}
.frm_style_formidable-style.with_frm_style .frm_button .frm_icon_font:before{
    font-size:14px;
}

/* Dropzone */
.frm_style_formidable-style.with_frm_style .frm_dropzone{
	border-color: #cccccc;
	border-radius:4px;
	color: #555555;
	background-color:#ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_dropzone .frm_upload_icon:before,
.frm_style_formidable-style.with_frm_style .frm_dropzone .dz-remove{
	color: #555555;
}

.frm_style_formidable-style.with_frm_style .frm_blank_field .frm_dropzone{
	border-color:#B94A48;
	color:#444444;
	background-color:#ffffff;
}

/* RTL Grids */
/* Start Chosen */
.frm_style_formidable-style.with_frm_style .chosen-container{
    font-size:14px;
}

.frm_style_formidable-style.with_frm_style .chosen-container-single .chosen-single{
    height:32px;
    line-height:1.3;
}

.frm_style_formidable-style.with_frm_style .chosen-container-single .chosen-single div{
    top:3px;
}

.frm_style_formidable-style.with_frm_style .chosen-container-single .chosen-search input[type="text"]{
    height:32px;
}

.frm_style_formidable-style.with_frm_style .chosen-container-multi .chosen-choices li.search-field input[type="text"]{
    height:15px;
}
/* End Chosen */

/* Progress Bars */
.frm_style_formidable-style.with_frm_style .frm_page_bar input,
.frm_style_formidable-style.with_frm_style .frm_page_bar input:disabled{
	color: #ffffff;
	background-color: #dddddd;
	border-color: #dfdfdf;
	border-width: 2px;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line input.frm_page_back{
	background-color: #008ec2;
}

.frm_style_formidable-style.with_frm_style .frm_page_bar .frm_current_page input[type="button"]{
	background-color: #dddddd;
	border-color: #dfdfdf;
	opacity:1;
}

.frm_style_formidable-style.with_frm_style .frm_current_page .frm_rootline_title{
	color: #008ec2;
}

.frm_style_formidable-style.with_frm_style .frm_rootline_title,
.frm_style_formidable-style.with_frm_style .frm_pages_complete,
.frm_style_formidable-style.with_frm_style .frm_percent_complete{
	color: #666666;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line input,
.frm_style_formidable-style.with_frm_style .frm_progress_line input:disabled {
	border-color: #dfdfdf;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line.frm_show_lines input {
	border-left-color: #ffffff;
	border-right-color: #ffffff;
	border-left-width: 1px ;
	border-right-width: 1px ;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line li:first-of-type input {
	border-left-color: #008ec2;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line li:last-of-type input {
	border-right-color: #008ec2;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line li:last-of-type input.frm_page_skip {
	border-right-color: #dfdfdf;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line .frm_current_page input[type="button"] {
	border-left-color: #dfdfdf;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line.frm_show_lines .frm_current_page input[type="button"] {
	border-right-color: #ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line input.frm_page_back {
	border-color: #008ec2;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line.frm_show_lines input.frm_page_back{
	border-left-color: #008ec2;
	border-right-color: #ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_rootline.frm_show_lines:before {
    border-color: #dfdfdf;
	border-top-width: 2px;
    top: 15px;
}

.frm_style_formidable-style.with_frm_style .frm_rootline input,
.frm_style_formidable-style.with_frm_style .frm_rootline input:hover {
	width: 30px;
	height: 30px;
	border-radius: 30px;
	padding: 0;
}

.frm_style_formidable-style.with_frm_style .frm_rootline input:focus {
	border-color: #008ec2;
}

.frm_style_formidable-style.with_frm_style .frm_rootline .frm_current_page input[type="button"] {
	border-color: #007aae;
	background-color: #008ec2;
	color: #ffffff;
}

.frm_style_formidable-style.with_frm_style .frm_progress_line input,
.frm_style_formidable-style.with_frm_style .frm_progress_line input:disabled,
.frm_style_formidable-style.with_frm_style .frm_progress_line .frm_current_page input[type="button"],
.frm_style_formidable-style.with_frm_style .frm_rootline.frm_no_numbers input,
.frm_style_formidable-style.with_frm_style .frm_rootline.frm_no_numbers .frm_current_page input[type="button"] {
	color: transparent !important;
}

/* Responsive CSS */
@media only screen and (max-width: 600px){
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_left_container input:not([type=radio]):not([type=checkbox]),
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_left_container select,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_left_container textarea,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_left_container .frm_opt_container,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_left_container.frm-g-recaptcha,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_left_container.g-recaptcha,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_left_container .chosen-container,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_right_container input:not([type=radio]):not([type=checkbox]),
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_right_container select,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_right_container textarea,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_right_container .frm_opt_container,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_right_container.frm-g-recaptcha,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_right_container.g-recaptcha,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_right_container .chosen-container{
		max-width:100%;
	}
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_half.frm_left_container .frm_primary_label,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_half.frm_left_container .frm_primary_label,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_first_half.frm_left_container .frm_primary_label,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_last_half.frm_left_container .frm_primary_label,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_left_container .frm_primary_label,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_half.frm_right_container .frm_primary_label,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_half.frm_right_container .frm_primary_label,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_first_half.frm_right_container .frm_primary_label,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_last_half.frm_right_container .frm_primary_label,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_right_container .frm_primary_label{
		max-width:100%;
		margin-right:0;
		margin-left:0;
		padding-right:0;
		padding-left:0;
		width:100%;
	}


	.frm_style_formidable-style.with_frm_style .frm_repeat_inline,
	.frm_style_formidable-style.with_frm_style .frm_repeat_grid{
		margin: 20px 0;
	}

	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_first_half.frm_right_container div.frm_description,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_first_half.frm_right_container .frm_error,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_first_half .frm_right_container div.frm_description,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_first_half .frm_right_container .frm_error,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_last_half.frm_right_container div.frm_description,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_last_half.frm_right_container .frm_error,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_right_container div.frm_description,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_right_container .frm_error,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_first_half.frm_left_container div.frm_description,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_first_half.frm_left_container .frm_error,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_first_half .frm_left_container div.frm_description,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_first_half .frm_left_container .frm_error,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_last_half.frm_left_container div.frm_description,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_last_half.frm_left_container .frm_error,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_left_container div.frm_description,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_half.frm_left_container .frm_error{
		margin-right:0;
		margin-left:0;
		padding-right:0;
		padding-left:0;
	}
}

@media only screen and (max-width: 500px) {
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container input:not([type=radio]):not([type=checkbox]),
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container:not(.frm_dynamic_select_container) select,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container textarea,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .frm_opt_container,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .frm-g-recaptcha,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .g-recaptcha,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_left_container .chosen-container,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container input:not([type=radio]):not([type=checkbox]),
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container:not(.frm_dynamic_select_container) select,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container textarea,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .frm_opt_container,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .frm-g-recaptcha,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .g-recaptcha,
	.frm_style_formidable-style.with_frm_style .frm_form_field.frm_right_container .chosen-container{
		max-width:100%;
	}

	.frm_style_formidable-style.with_frm_style .frm_left_container > p.description::before,
	.frm_style_formidable-style.with_frm_style .frm_left_container > div.description::before,
	.frm_style_formidable-style.with_frm_style .frm_left_container > div.frm_description::before,
	.frm_style_formidable-style.with_frm_style .frm_left_container > .frm_error::before,
	.frm_style_formidable-style.with_frm_style .frm_right_container > p.description::after,
	.frm_style_formidable-style.with_frm_style .frm_right_container > div.description::after,
	.frm_style_formidable-style.with_frm_style .frm_right_container > div.frm_description::after,
	.frm_style_formidable-style.with_frm_style .frm_right_container > .frm_error::after{
		display:none;
	}

	.frm_style_formidable-style.with_frm_style .frm_left_container label.frm_primary_label,
	.frm_style_formidable-style.with_frm_style .frm_right_container label.frm_primary_label{
		width:100%;
		max-width:100%;
		margin-right:0;
		margin-left:0;
		padding-right:0;
		padding-left:0;
	}
}
/* End Responsive CSS*/

.frm_ajax_loading{
    visibility:hidden;
	width:auto;
}

.frm_form_submit_style{
    height:auto;
}

a.frm_save_draft{
    cursor:pointer;
}

.horizontal_radio .frm_radio{
    margin:0 5px 0 0;
}

.horizontal_radio .frm_checkbox{
    margin:0;
    margin-right:5px;
}

.vertical_radio .frm_checkbox,
.vertical_radio .frm_radio,
.vertical_radio .frm_catlevel_1{
    display:block;
}

.horizontal_radio .frm_checkbox,
.horizontal_radio .frm_radio,
.horizontal_radio .frm_catlevel_1{
    display:inline-block;
}

.frm_file_container .frm_file_link,
.with_frm_style .frm_radio label .frm_file_container,
.with_frm_style .frm_checkbox label .frm_file_container{
    display:inline-block;
    margin:5px;
    vertical-align:middle;
}

.with_frm_style .frm_radio input[type=radio]{
    border-radius:10px;
	-webkit-appearance:radio;
}

.with_frm_style .frm_checkbox input[type=checkbox]{
    border-radius:0;
	-webkit-appearance:checkbox;
}

.with_frm_style .frm_radio input[type=radio],
.with_frm_style .frm_checkbox input[type=checkbox]{
	display:inline-block;
	margin-right:5px;
	width:auto;
	border:none;
	vertical-align:baseline;
}

.with_frm_style :invalid,
.with_frm_style :-moz-submit-invalid,
.with_frm_style :-moz-ui-invalid{
    box-shadow:none;
}

.with_frm_style .frm_error_style img{
    padding-right:10px;
    vertical-align:middle;
    border:none;
}

.with_frm_style .frm_trigger{
    cursor:pointer;
}

.with_frm_style .frm_error_style,
.with_frm_style .frm_message,
.frm_success_style{
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    border-radius:4px;
    padding:15px;
}

.with_frm_style .frm_message p{
    margin-bottom:5px;
}

.frm_form_fields_style,
.frm_form_fields_active_style,
.frm_form_fields_error_style,
.frm_form_submit_style{
    width:auto;
}

.with_frm_style .frm_trigger span{
    float:left;
}

.with_frm_style table.frm-grid,
#content .with_frm_style table.frm-grid{
    border-collapse:collapse;
    border:none;
}

.frm-grid td,
.frm-grid th{
    padding:5px;
    border-width:1px;
    border-style:solid;
    border-color:#cccccc;
    border-top:none;
    border-left:none;
    border-right:none;
}

table.form_results.with_frm_style{
    border:1px solid #ccc;
}

table.form_results.with_frm_style tr td{
    text-align:left;
    color:#555555;
    padding:7px 9px;
    border-top:1px solid #cccccc;
}

table.form_results.with_frm_style tr.frm_even,
.frm-grid .frm_even{
    background-color:#fff;
}

table.form_results.with_frm_style tr.frm_odd,
.frm-grid .frm_odd{
    background-color:#ffffff;
}

.frm_collapse .ui-icon{
    display:inline-block;
}

.frm_toggle_container{
    /* Prevent the slide and bounce */
    border:1px solid transparent;
}

.frm_toggle_container ul{
	margin:5px 0;
    padding-left:0;
	list-style-type:none;
}

.frm_toggle_container .frm_month_heading{
	text-indent:15px;
}

.frm_toggle_container .frm_month_listing{
	margin-left:40px;
}

#frm_loading{
    display:none;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    z-index:99999;
}

#frm_loading h3{
    font-weight:500;
    padding-bottom:15px;
    color:#fff;
    font-size:24px;
}

#frm_loading_content{
    position:fixed;
    top:20%;
    left:33%;
    width:33%;
    text-align:center;
    padding-top:30px;
    font-weight:bold;
    z-index:9999999;
}

#frm_loading img{
    max-width:100%;
}

#frm_loading .progress{
    border-radius:4px;
    box-shadow:0 1px 2px rgba(0, 0, 0, 0.1) inset;
    height:20px;
    margin-bottom:20px;
    overflow:hidden;
}

#frm_loading .progress.active .progress-bar{
    animation:2s linear 0s normal none infinite progress-bar-stripes;
}

#frm_loading .progress-striped .progress-bar{
    background-image:linear-gradient(45deg, #cccccc 25%, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 0) 50%, #cccccc 50%, #cccccc 75%, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0));
    background-size:40px 40px;
}

#frm_loading .progress-bar{
    background-color:#ffffff;
    box-shadow:0 -1px 0 rgba(0, 0, 0, 0.15) inset;
    float:left;
    height:100%;
    line-height:20px;
    text-align:center;
    transition:width 0.6s ease 0s;
    width:100%;
}

.frm_image_from_url{
	height:50px;
}

.frm-loading-img{
    background:url(//landing.ai/content/plugins/formidable/images/ajax_loader.gif) no-repeat center center;
    padding:6px 12px;
}

select.frm_loading_lookup{
    background-image: url(//landing.ai/content/plugins/formidable/images/ajax_loader.gif) !important;
    background-position: 10px;
    background-repeat: no-repeat;
    color: transparent !important;
}

.with_frm_style .frm_form_field{
    clear:both;
}

.frm_form_field.frm_right_half,
.frm_form_field.frm_right_third,
.frm_form_field.frm_right_two_thirds,
.frm_form_field.frm_right_fourth,
.frm_form_field.frm_right_fifth,
.frm_form_field.frm_right_inline,
.frm_form_field.frm_last_half,
.frm_form_field.frm_last_third,
.frm_form_field.frm_last_two_thirds,
.frm_form_field.frm_last_fourth,
.frm_form_field.frm_last_fifth,
.frm_form_field.frm_last_sixth,
.frm_form_field.frm_last_seventh,
.frm_form_field.frm_last_eighth,
.frm_form_field.frm_last_inline,
.frm_form_field.frm_last,
.frm_form_field.frm_half,
.frm_submit.frm_half,
.frm_form_field.frm_third,
.frm_submit.frm_third,
.frm_form_field.frm_two_thirds,
.frm_form_field.frm_fourth,
.frm_submit.frm_fourth,
.frm_form_field.frm_three_fourths,
.frm_form_field.frm_fifth,
.frm_submit.frm_fifth,
.frm_form_field.frm_two_fifths,
.frm_form_field.frm_three_fifths,
.frm_form_field.frm_four_fifths,
.frm_form_field.frm_sixth,
.frm_submit.frm_sixth,
.frm_form_field.frm_seventh,
.frm_submit.frm_seventh,
.frm_form_field.frm_eighth,
.frm_submit.frm_eighth,
.frm_form_field.frm_inline,
.frm_submit.frm_inline{
    clear:none;
    float:left;
	margin-left:2.5%;
}

.frm_form_field.frm_left_half,
.frm_form_field.frm_left_third,
.frm_form_field.frm_left_two_thirds,
.frm_form_field.frm_left_fourth,
.frm_form_field.frm_left_fifth,
.frm_form_field.frm_left_inline,
.frm_form_field.frm_first_half,
.frm_form_field.frm_first_third,
.frm_form_field.frm_first_two_thirds,
.frm_form_field.frm_first_fourth,
.frm_form_field.frm_first_fifth,
.frm_form_field.frm_first_sixth,
.frm_form_field.frm_first_seventh,
.frm_form_field.frm_first_eighth,
.frm_form_field.frm_first_inline,
.frm_form_field.frm_first{
    clear:left;
    float:left;
	margin-left:0;
}

.frm_form_field.frm_alignright{
	float:right !important;
}

.frm_form_field.frm_left_half,
.frm_form_field.frm_right_half,
.frm_form_field.frm_first_half,
.frm_form_field.frm_last_half,
.frm_form_field.frm_half,
.frm_submit.frm_half{
    width:48.75%;
}

.frm_form_field.frm_left_third,
.frm_form_field.frm_third,
.frm_submit.frm_third,
.frm_form_field.frm_right_third,
.frm_form_field.frm_first_third,
.frm_form_field.frm_last_third{
    width:31.66%;
}

.frm_form_field.frm_left_two_thirds,
.frm_form_field.frm_right_two_thirds,
.frm_form_field.frm_first_two_thirds,
.frm_form_field.frm_last_two_thirds,
.frm_form_field.frm_two_thirds{
    width:65.82%;
}

.frm_form_field.frm_left_fourth,
.frm_form_field.frm_fourth,
.frm_submit.frm_fourth,
.frm_form_field.frm_right_fourth,
.frm_form_field.frm_first_fourth,
.frm_form_field.frm_last_fourth{
    width:23.12%;
}

.frm_form_field.frm_three_fourths{
	width:74.36%;
}

.frm_form_field.frm_left_fifth,
.frm_form_field.frm_fifth,
.frm_submit.frm_fifth,
.frm_form_field.frm_right_fifth,
.frm_form_field.frm_first_fifth,
.frm_form_field.frm_last_fifth{
    width:18%;
}

.frm_form_field.frm_two_fifths {
	width:38.5%;
}

.frm_form_field.frm_three_fifths {
	width:59%;
}

.frm_form_field.frm_four_fifths {
	width:79.5%;
}

.frm_form_field.frm_sixth,
.frm_submit.frm_sixth,
.frm_form_field.frm_first_sixth,
.frm_form_field.frm_last_sixth{
    width:14.58%;
}

.frm_form_field.frm_seventh,
.frm_submit.frm_seventh,
.frm_form_field.frm_first_seventh,
.frm_form_field.frm_last_seventh{
    width:12.14%;
}

.frm_form_field.frm_eighth,
.frm_submit.frm_eighth,
.frm_form_field.frm_first_eighth,
.frm_form_field.frm_last_eighth{
    width:10.31%;
}

.frm_form_field.frm_left_inline,
.frm_form_field.frm_first_inline,
.frm_form_field.frm_inline,
.frm_submit.frm_inline,
.frm_form_field.frm_right_inline,
.frm_form_field.frm_last_inline{
    width:auto;
}

.frm_full,
.frm_full .wp-editor-wrap,
.frm_full input:not([type='checkbox']):not([type='radio']):not([type='button']),
.frm_full select,
.frm_full textarea{
    width:100% !important;
}

.frm_full .wp-editor-wrap input{
    width:auto !important;
}

@media only screen and (max-width: 600px) {
	.frm_form_field.frm_half,
	.frm_submit.frm_half,
    .frm_form_field.frm_left_half,
    .frm_form_field.frm_right_half,
    .frm_form_field.frm_first_half,
    .frm_form_field.frm_last_half,
    .frm_form_field.frm_first_third,
    .frm_form_field.frm_third,
	.frm_submit.frm_third,
    .frm_form_field.frm_last_third,
    .frm_form_field.frm_first_two_thirds,
	.frm_form_field.frm_last_two_thirds,
	.frm_form_field.frm_two_thirds,
    .frm_form_field.frm_left_fourth,
    .frm_form_field.frm_fourth,
	.frm_submit.frm_fourth,
    .frm_form_field.frm_right_fourth,
    .frm_form_field.frm_first_fourth,
	.frm_form_field.frm_last_fourth,
	.frm_form_field.frm_three_fourths,
	.frm_form_field.frm_fifth,
	.frm_submit.frm_fifth,
	.frm_form_field.frm_two_fifths,
	.frm_form_field.frm_three_fifths,
	.frm_form_field.frm_four_fifths,
	.frm_form_field.frm_sixth,
	.frm_submit.frm_sixth,
	.frm_form_field.frm_seventh,
	.frm_submit.frm_seventh,
	.frm_form_field.frm_eighth,
	.frm_submit.frm_eighth,
    .frm_form_field.frm_first_inline,
    .frm_form_field.frm_inline,
	.frm_submit.frm_inline,
    .frm_form_field.frm_last_inline{
        width:100%;
        margin-left:0;
        margin-right:0;
		clear:both;
        float:none;
    }
}
/* Left and right label styling for non-Formidable styling - very basic, not responsive */
.frm_form_field.frm_left_container label.frm_primary_label{
	float:left;
	display:inline;
	max-width:33%;
	margin-right:10px;
}

.frm_form_field.frm_left_container input:not([type=radio]):not([type=checkbox]),
.frm_form_field.frm_left_container:not(.frm_dynamic_select_container) select,
.frm_form_field.frm_left_container textarea,
.frm_form_field.frm_left_container .wp-editor-wrap,
.frm_form_field.frm_left_container .frm_opt_container,
.frm_form_field.frm_left_container .frm_dropzone,
.frm_form_field.frm_left_container .frm-g-recaptcha,
.frm_form_field.frm_left_container .g-recaptcha,
.frm_form_field.frm_left_container .chosen-container,
.frm_form_field.frm_left_container .frm_combo_inputs_container,
.frm_form_field.frm_right_container input:not([type=radio]):not([type=checkbox]),
.frm_form_field.frm_right_container:not(.frm_dynamic_select_container) select,
.frm_form_field.frm_right_container textarea,
.frm_form_field.frm_right_container .wp-editor-wrap,
.frm_form_field.frm_right_container .frm_opt_container,
.frm_form_field.frm_right_container .frm_dropzone,
.frm_form_field.frm_right_container .frm-g-recaptcha,
.frm_form_field.frm_right_container .g-recaptcha,
.frm_form_field.frm_right_container .chosen-container,
.frm_form_field.frm_right_container .frm_combo_inputs_container{
	max-width:62%;
}

.frm_form_field.frm_left_container .frm_combo_inputs_container input,
.frm_form_field.frm_left_container .frm_combo_inputs_container select,
.frm_form_field.frm_right_container .frm_combo_inputs_container input,
.frm_form_field.frm_right_container .frm_combo_inputs_container select{
    max-width:100%;
}

.frm_form_field.frm_left_container .frm_opt_container,
.frm_form_field.frm_right_container .frm_opt_container,
.frm_form_field.frm_inline_container .frm_opt_container,
.frm_form_field.frm_left_container .frm_combo_inputs_container,
.frm_form_field.frm_right_container .frm_combo_inputs_container,
.frm_form_field.frm_inline_container .frm_combo_inputs_container,
.frm_form_field.frm_left_container .wp-editor-wrap,
.frm_form_field.frm_right_container .wp-editor-wrap,
.frm_form_field.frm_inline_container .wp-editor-wrap,
.frm_form_field.frm_left_container .frm_dropzone,
.frm_form_field.frm_right_container .frm_dropzone,
.frm_form_field.frm_inline_container .frm_dropzone,
.frm_form_field.frm_left_container .frm-g-recaptcha,
.frm_form_field.frm_right_container .frm-g-recaptcha,
.frm_form_field.frm_inline_container .frm-g-recaptcha,
.frm_form_field.frm_left_container .g-recaptcha,
.frm_form_field.frm_right_container .g-recaptcha,
.frm_form_field.frm_inline_container .g-recaptcha{
	display:inline-block;
}

.frm_form_field.frm_left_half.frm_left_container .frm_primary_label,
.frm_form_field.frm_right_half.frm_left_container .frm_primary_label,
.frm_form_field.frm_left_half.frm_right_container .frm_primary_label,
.frm_form_field.frm_right_half.frm_right_container .frm_primary_label,
.frm_form_field.frm_first_half.frm_left_container .frm_primary_label,
.frm_form_field.frm_last_half.frm_left_container .frm_primary_label,
.frm_form_field.frm_first_half.frm_right_container .frm_primary_label,
.frm_form_field.frm_last_half.frm_right_container .frm_primary_label,
.frm_form_field.frm_half.frm_right_container .frm_primary_label,
.frm_form_field.frm_half.frm_left_container .frm_primary_label{
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	max-width:33%;
}
/* End of left and right label styling */

.wp-editor-wrap *,
.wp-editor-wrap *:after,
.wp-editor-wrap *:before{
    -webkit-box-sizing:content-box;
    -moz-box-sizing:content-box;
    box-sizing:content-box;
}

.with_frm_style .frm_grid,
.with_frm_style .frm_grid_first,
.with_frm_style .frm_grid_odd{
    clear:both;
    margin-bottom:0 !important;
    padding:5px;
    border-width:1px;
    border-style:solid;
    border-color:#cccccc;
    border-left:none;
    border-right:none;
}

.with_frm_style .frm_grid,
.with_frm_style .frm_grid_odd{
    border-top:none;
}

.frm_grid .frm_error,
.frm_grid_first .frm_error,
.frm_grid_odd .frm_error{
    display:none;
}

.frm_grid:after,
.frm_grid_first:after,
.frm_grid_odd:after{
    visibility:hidden;
    display:block;
    font-size:0;
    content:" ";
    clear:both;
    height:0;
}

.frm_grid_first{
    margin-top:20px;
}

.frm_grid_first,
.frm_grid_odd{
    background-color:#ffffff;
}

.frm_grid{
    background-color:#ffffff;
}

.frm_grid .frm_primary_label,
.frm_grid_first .frm_primary_label,
.frm_grid_odd .frm_primary_label,
.frm_grid .frm_radio,
.frm_grid_first .frm_radio,
.frm_grid_odd .frm_radio,
.frm_grid .frm_checkbox,
.frm_grid_first .frm_checkbox,
.frm_grid_odd .frm_checkbox{
    float:left !important;
    display:block;
    margin-top:0;
    margin-left:0 !important;
}

.frm_grid_first .frm_radio label,
.frm_grid .frm_radio label,
.frm_grid_odd .frm_radio label,
.frm_grid_first .frm_checkbox label,
.frm_grid .frm_checkbox label,
.frm_grid_odd .frm_checkbox label{
    visibility:hidden;
    white-space:nowrap;
    text-align:left;
}

.frm_grid_first .frm_radio label input,
.frm_grid .frm_radio label input,
.frm_grid_odd .frm_radio label input,
.frm_grid_first .frm_checkbox label input,
.frm_grid .frm_checkbox label input,
.frm_grid_odd .frm_checkbox label input{
    visibility:visible;
    margin:2px 0 0;
    float:right;
}

.frm_grid .frm_radio,
.frm_grid_first .frm_radio,
.frm_grid_odd .frm_radio,
.frm_grid .frm_checkbox,
.frm_grid_first .frm_checkbox,
.frm_grid_odd .frm_checkbox{
    display:inline;
}

.frm_grid_2 .frm_radio,
.frm_grid_2 .frm_checkbox,
.frm_grid_2 label.frm_primary_label{
    width:48% !important;
}

.frm_grid_2 .frm_radio,
.frm_grid_2 .frm_checkbox{
    margin-right:4%;
}

.frm_grid_3 .frm_radio,
.frm_grid_3 .frm_checkbox,
.frm_grid_3 label.frm_primary_label{
    width:30% !important;
}

.frm_grid_3 .frm_radio,
.frm_grid_3 .frm_checkbox{
    margin-right:3%;
}

.frm_grid_4 .frm_radio,
.frm_grid_4 .frm_checkbox{
    width:20% !important;
}

.frm_grid_4 label.frm_primary_label{
    width:28% !important;
}

.frm_grid_4 .frm_radio,
.frm_grid_4 .frm_checkbox{
    margin-right:4%;
}

.frm_grid_5 label.frm_primary_label,
.frm_grid_7 label.frm_primary_label{
    width:24% !important;
}

.frm_grid_5 .frm_radio,
.frm_grid_5 .frm_checkbox{
    width:17% !important;
    margin-right:2%;
}

.frm_grid_6 label.frm_primary_label{
    width:25% !important;
}

.frm_grid_6 .frm_radio,
.frm_grid_6 .frm_checkbox{
    width:14% !important;
    margin-right:1%;
}

.frm_grid_7 label.frm_primary_label{
    width:22% !important;
}

.frm_grid_7 .frm_radio,
.frm_grid_7 .frm_checkbox{
    width:12% !important;
    margin-right:1%;
}

.frm_grid_8 label.frm_primary_label{
    width:23% !important;
}

.frm_grid_8 .frm_radio,
.frm_grid_8 .frm_checkbox{
    width:10% !important;
    margin-right:1%;
}

.frm_grid_9 label.frm_primary_label{
    width:20% !important;
}

.frm_grid_9 .frm_radio,
.frm_grid_9 .frm_checkbox{
    width:9% !important;
    margin-right:1%;
}

.frm_grid_10 label.frm_primary_label{
    width:19% !important;
}

.frm_grid_10 .frm_radio,
.frm_grid_10 .frm_checkbox{
    width:8% !important;
    margin-right:1%;
}

.with_frm_style .frm_inline_container.frm_grid_first label.frm_primary_label,
.with_frm_style .frm_inline_container.frm_grid label.frm_primary_label,
.with_frm_style .frm_inline_container.frm_grid_odd label.frm_primary_label,
.with_frm_style .frm_inline_container.frm_grid_first .frm_opt_container,
.with_frm_style .frm_inline_container.frm_grid .frm_opt_container,
.with_frm_style .frm_inline_container.frm_grid_odd .frm_opt_container{
    margin-right:0;
}

.with_frm_style .frm_inline_container.frm_scale_container label.frm_primary_label{
	float:left;
}

.with_frm_style .frm_other_input.frm_other_full{
	margin-top:10px;
}

.frm_form_field.frm_two_col .frm_radio,
.frm_form_field.frm_three_col .frm_radio,
.frm_form_field.frm_four_col .frm_radio,
.frm_form_field.frm_two_col .frm_checkbox,
.frm_form_field.frm_three_col .frm_checkbox,
.frm_form_field.frm_four_col .frm_checkbox{
    float:left;
}

.frm_form_field.frm_two_col .frm_radio,
.frm_form_field.frm_two_col .frm_checkbox{
    width:48%;
    margin-right:4%;
}

.frm_form_field .frm_checkbox,
.frm_form_field .frm_radio{
    margin-top: 0;
    margin-bottom: 0;
}

.frm_form_field.frm_three_col .frm_radio,
.frm_form_field.frm_three_col .frm_checkbox{
    width:30%;
    margin-right:5%;
}

.frm_form_field.frm_four_col .frm_radio,
.frm_form_field.frm_four_col .frm_checkbox{
    width:22%;
    margin-right:4%;
}

.frm_form_field.frm_two_col .frm_radio:nth-child(2n+2),
.frm_form_field.frm_two_col .frm_checkbox:nth-child(2n+2),
.frm_form_field.frm_three_col .frm_radio:nth-child(3n+3),
.frm_form_field.frm_three_col .frm_checkbox:nth-child(3n+3),
.frm_form_field.frm_four_col .frm_radio:nth-child(4n+4),
.frm_form_field.frm_four_col .frm_checkbox:nth-child(4n+4){
	margin-right:0;
}

.frm_form_field.frm_scroll_box .frm_opt_container{
    height:100px;
    overflow:auto;
}

.frm_form_field.frm_html_scroll_box{
    height:100px;
    overflow:auto;
    background-color:#ffffff;
    border-color:#cccccc;
    border-width:1px;
    border-style:solid;
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    border-radius:4px;
    width:100%;
    max-width:100%;
    font-size:14px;
    padding:6px 10px;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
    outline:none;
    font-weight:normal;
    box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset;
}

.frm_form_field.frm_two_col .frm_opt_container:after,
.frm_form_field.frm_three_col .frm_opt_container:after,
.frm_form_field.frm_four_col .frm_opt_container:after{
    content:".";
    display:block;
    clear:both;
    visibility:hidden;
    line-height:0;
    height:0;
}

.frm_form_field.frm_total input,
.frm_form_field.frm_total textarea{
    opacity:1;
    background-color:transparent !important;
    border:none !important;
    font-weight:bold;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
    width:auto !important;
    box-shadow:none !important;
    display:inline;
	-moz-appearance:textfield;
	padding:0;
}

.frm_form_field.frm_total input::-webkit-outer-spin-button,
.frm_form_field.frm_total input::-webkit-inner-spin-button {
	    -webkit-appearance: none;
}

.frm_form_field.frm_total input:focus,
.frm_form_field.frm_total textarea:focus{
    background-color:transparent;
    border:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
    box-shadow:none;
}

.frm_text_block{
    margin-left:20px;
}

.frm_text_block input,
.frm_text_block label.frm_primary_label{
    margin-left:-20px;
}

.frm_text_block .frm_checkbox input[type=checkbox],
.frm_text_block .frm_radio input[type=radio]{
    margin-right:4px;
}

.frm_form_field.frm_capitalize input,
.frm_form_field.frm_capitalize select,
.frm_form_field.frm_capitalize .frm_opt_container label{
    text-transform:capitalize;
}

.frm_clearfix:after{
    content:".";
    display:block;
    clear:both;
    visibility:hidden;
    line-height:0;
    height:0;
}

.frm_clearfix{
    display:block;
}

/* Login form */
.with_frm_style.frm_login_form,
.with_frm_style.frm_login_form form{
	clear:both;
}

.with_frm_style.frm_login_form.frm_inline_login .login-remember input{
	vertical-align:baseline;
}

.with_frm_style.frm_login_form.frm_inline_login .login-submit{
	float:left;
}

.with_frm_style.frm_login_form.frm_inline_login label{
	display:inline;
}

.with_frm_style.frm_login_form.frm_inline_login .login-username,
.with_frm_style.frm_login_form.frm_inline_login .login-password,
.with_frm_style.frm_login_form.frm_inline_login .login-remember{
	float:left;
	margin-right:5px;
}

.with_frm_style.frm_login_form.frm_inline_login form{
	position:relative;
	clear:none;
}

.with_frm_style.frm_login_form.frm_inline_login .login-remember{
	position:absolute;
	top:35px;
}

.with_frm_style.frm_login_form.frm_inline_login input[type=submit]{
	margin:0 !important;
}

.with_frm_style.frm_login_form.frm_no_labels .login-username label,
.with_frm_style.frm_login_form.frm_no_labels .login-password label{
	display:none;
}

.with_frm_style .frm-open-login{
	float:left;
	margin-right:15px;
}

.with_frm_style .frm-open-login a{
	text-decoration:none;
	border:none;
	outline:none;
}

.with_frm_style.frm_slide.frm_login_form form{
	display:none;
}

/* Fonts */
@font-face {
	font-family:'s11-fp';
	src:url('//landing.ai/content/plugins/formidable/fonts/s11-fp.eot');
	src:local('☺'), url('//landing.ai/content/plugins/formidable/fonts/s11-fp.woff') format('woff'), url('//landing.ai/content/plugins/formidable/fonts/s11-fp.ttf') format('truetype'), url('//landing.ai/content/plugins/formidable/fonts/s11-fp.svg') format('svg');
	font-weight:normal;
	font-style:normal;
}

.frm_icon_font,
.frm_dashicon_font{
	text-decoration:none;
	text-shadow: none;
	font-weight:normal;
}

i.frm_icon_font{
	font-style:normal;
}

.frm_icon_font:before,
select.frm_icon_font{
	font-family: 's11-fp' !important;
	font-size:16px;
	speak: none;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

.frm_icon_font,
a.frm_icon_font,
.frm_icon_font:hover,
a.frm_icon_font:hover{
	text-decoration:none !important;
	box-shadow:none;
}

.frm_icon_font:focus,
.frm_dashicon_font:focus{
	box-shadow:none;
	-webkit-box-shadow:none;
}

.frm_duplicate_icon:active,
.frm_move_icon:active,
.frm_delete_icon:active{
	outline:none;
}

.frm_trigger .frm_icon_font{
	padding:0 5px;
}

.ab-icon.frm_dashicon_font:before{
	content: "\f324";
}

.frm_logo_icon:before {
	content: "\e601";
}
.frm_required_icon:before {
	content: "\e612";
}
.frm_delete_icon:before {
	content: "\e610" !important;
}
.frm_move_icon:before {
	content: "\e61a";
}
.frm_clear_icon:before {
	content: "\e60a";
}
.frm_noclear_icon:before {
	content: "\e60b";
}
.frm_duplicate_icon:before {
	content: "\e61b";
}
.frm_new_icon:before {
	content: "\e614";
}
.frm_tooltip_icon:before {
	content: "\e611";
}
.frm_forbid_icon:before {
	content: "\e636";
}
.frm_check_icon:before {
	content: "\e605";
}
.frm_check1_icon:before {
	content: "\e606";
}
.frm_plus_icon:before {
	content: "\e62f";
}
.frm_plus1_icon:before {
	content: "\e602";
}
.frm_plus2_icon:before {
	content: "\e603";
}
.frm_plus3_icon:before {
	content: "\e632";
}
.frm_plus4_icon:before {
	content: "\e60f";
}
.frm_minus_icon:before {
	content: "\e62e";
}
.frm_minus1_icon:before {
	content: "\e600";
}
.frm_minus2_icon:before {
	content: "\e604";
}
.frm_minus3_icon:before {
	content: "\e633";
}
.frm_minus4_icon:before {
	content: "\e613";
}
.frm_cancel_icon:before {
	content: "\e607";
}
.frm_cancel1_icon:before {
	content: "\e608";
}
.frm_arrowup_icon:before {
	content: "\e60d";
}
.frm_arrowup1_icon:before {
	content: "\e60e";
}
.frm_arrowup2_icon:before {
	content: "\e630";
}
.frm_arrowup3_icon:before {
	content: "\e62b";
}
.frm_arrowup4_icon:before {
	content: "\e62c";
}
.frm_arrowup5_icon:before {
	content: "\e635";
}
.frm_arrowup6_icon:before {
	content: "\e62d";
}
.frm_arrowdown_icon:before {
	content: "\e609";
}
.frm_arrowdown1_icon:before {
	content: "\e60c";
}
.frm_arrowdown2_icon:before {
	content: "\e631";
}
.frm_arrowdown3_icon:before {
	content: "\e628";
}
.frm_arrowdown4_icon:before {
	content: "\e629";
}
.frm_arrowdown5_icon:before {
	content: "\e634";
}
.frm_arrowdown6_icon:before {
	content: "\e62a";
}
.frm_download_icon:before {
	content: "\e615";
}
.frm_upload_icon:before {
	content: "\e616";
}
.frm_menu_icon:before {
	content: "\e618";
}
.frm_twitter_icon:before {
	content: "\e619";
}
.frm_sms_icon:before {
	content: "\e61c";
}
.frm_pencil_icon:before {
	content: "\e61d";
}
.frm_pencil1_icon:before {
	content: "\e61e";
}
.frm_paypal_icon:before {
	content: "\e61f";
}
.frm_twilio_icon:before {
	content: "\e620";
}
.frm_googleplus_icon:before {
	content: "\e621";
}
.frm_mailchimp_icon:before {
	content: "\e622";
}
.frm_pdf_icon:before {
	content: "\e623";
}
.frm_highrise_icon:before {
	content: "\e617";
}
.frm_feed_icon:before {
	content: "\e624";
}
.frm_facebook_icon:before {
	content: "\e625";
}
.frm_email_icon:before {
	content: "\e626";
}
.frm_aweber_icon:before {
	content: "\e627";
}
.frm_register_icon:before {
	content: "\e637";
}
.frm_authorize_icon:before {
    content: "\e900";
}
.frm_stripe_icon:before {
    content: "\e902";
}
.frm_woocommerce_icon:before {
    content: "\e903";
}
.frm_paste_icon:before {
    content: "\e901";
}
.js .frm_logic_form:not(.frm_no_hide) {
    display:none;
}

.with_frm_style select.frm_time_select{
	white-space:pre;
	display:inline;
}

.with_frm_style .frm_repeat_sec{
    margin-bottom:20px;
    margin-top:20px;
}

.with_frm_style .frm_repeat_inline{
	clear:both;
}

.frm_form_field .frm_repeat_sec .frm_add_form_row{
    opacity:0;
	display:none;
	*display:inline;
	display:inline\0/; /* For IE 8-9 */
	-moz-transition: opacity .15s ease-in-out;
	-webkit-transition: opacity .15s ease-in-out;
	transition: opacity .15s ease-in-out;
    pointer-events:none;
}

.frm_section_heading div.frm_repeat_sec:last-child .frm_add_form_row{
    opacity:100;
	display:inline;
    pointer-events:auto;
}

.frm_form_field .frm_repeat_grid .frm_form_field label.frm_primary_label{
    display:none !important;
}

.frm_form_field .frm_repeat_grid.frm_first_repeat .frm_form_field label.frm_primary_label{
    display:inherit !important;
}


#ui-datepicker-div{
    display:none;
    z-index:999999 !important;
}

.frm_form_fields div.rating-cancel{
    display:none !important;
}

.frm_form_fields div.rating-cancel,
.frm_form_fields div.star-rating{
    float:left;
    width:17px;
    height:17px;
	font-size:16px;
    line-height:normal;
    cursor:pointer;
    display:block;
    background:transparent;
    overflow:hidden;
	clear:none;
}

.frm_form_fields div.rating-cancel a:before{
    font:16px/1 'dashicons';
    content:'\f460';
    color:#CDCDCD;
}

.frm_form_fields div.star-rating:before,
.frm_form_fields div.star-rating a:before{
    font:16px/1 'dashicons';
    content:'\f154';
    color:#F0AD4E;
}

.frm_form_fields div.rating-cancel a,
.frm_form_fields div.star-rating a{
    display:block;
    width:16px;
    height:100%;
    border:0;
}

.frm_form_fields div.star-rating-on:before,
.frm_form_fields div.star-rating-on a:before{
    content:'\f155';
}

.frm_form_fields div.star-rating-hover:before,
.frm_form_fields div.star-rating-hover a:before{
    content:'\f155';
}

.frm_form_fields div.frm_half_star:before,
.frm_form_fields div.frm_half_star a:before{
    content:'\f459';
}

.frm_form_fields div.rating-cancel.star-rating-hover a:before{
    color:#B63E3F;
}

.frm_form_fields div.star-rating-readonly,
.frm_form_fields div.star-rating-readonly a{
    cursor:default !important;
}

.frm_form_fields div.star-rating{
    overflow:hidden!important;
}

.frm_pagination_cont ul.frm_pagination{
    display:inline-block;
    list-style:none;
    margin-left:0 !important;
}

.frm_pagination_cont ul.frm_pagination > li{
    display:inline;
    list-style:none;
    margin:2px;
    background-image:none;
}

ul.frm_pagination > li.active a{
	text-decoration:none;
}

.frm_pagination_cont ul.frm_pagination > li:first-child{
    margin-left:0;
}

.archive-pagination.frm_pagination_cont ul.frm_pagination > li{
    margin:0;
}

/* Calendar Styling */
.frmcal{
    padding-top:30px;
}

.frmcal-title{
    font-size:116%;
}

.frmcal table.frmcal-calendar{
    border-collapse:collapse;
    margin-top:20px;
    color:#555555;
}

.frmcal table.frmcal-calendar,
.frmcal table.frmcal-calendar tbody tr td{
    border:1px solid #cccccc;
}

.frmcal table.frmcal-calendar,
.frmcal,
.frmcal-header{
    width:100%;
}

.frmcal-header{
    text-align:center;
}

.frmcal-prev{
    margin-right:10px;
}

.frmcal-prev,
.frmcal-dropdown{
    float:left;
}

.frmcal-dropdown{
    margin-left:5px;
}

.frmcal-next{
    float:right;
}

.frmcal table.frmcal-calendar thead tr th{
    text-align:center;
    padding:2px 4px;
}

.frmcal table.frmcal-calendar tbody tr td{
    height:110px;
    width:14.28%;
    vertical-align:top;
    padding:0 !important;
    color:#555555;
    font-size:12px;
}

table.frmcal-calendar .frmcal_date{
    background-color:#ffffff;
    padding:0 5px;
    text-align:right;
    -moz-box-shadow:0 2px 5px #cccccc;
    -webkit-box-shadow:0 2px 5px #cccccc;
    box-shadow:0 2px 5px #cccccc;
}

table.frmcal-calendar .frmcal-today .frmcal_date{
    background-color:#ffffff;
    padding:0 5px;
    text-align:right;
    -moz-box-shadow:0 2px 5px #66afe9;
    -webkit-box-shadow:0 2px 5px #66afe9;
    box-shadow:0 2px 5px #66afe9;
}

.frmcal_day_name,
.frmcal_num{
    display:inline;
}

.frmcal-content{
    padding:2px 4px;
}
/* End Calendar Styling *//* Start Chosen */
.with_frm_style .chosen-container{
    font-size:14px;
    position:relative;
    display:inline-block;
    zoom:1;
    vertical-align:middle;
	width:100% !important;
    -webkit-user-select:none;
    -moz-user-select:none;
    user-select:none;
    *display:inline;
}

.with_frm_style .chosen-container .chosen-drop{
    background:#fff;
    border:1px solid #aaa;
    border-top:0;
    position:absolute;
    top:100%;
    left:-9999px;
    box-shadow:0 4px 5px rgba(0,0,0,.15);
    z-index:1010;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
    width:100%;
}

.with_frm_style .chosen-container.chosen-with-drop .chosen-drop{
    left:0;
}

.with_frm_style .chosen-container a{
    cursor:pointer;
}

.with_frm_style .chosen-container-single .chosen-single{
    position:relative;
    display:block;
    overflow:hidden;
    padding:0 0 0 8px;
    height:25px;
    background:-webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(20%, #ffffff), color-stop(50%, #f6f6f6), color-stop(52%, #eeeeee), color-stop(100%, #f4f4f4));
    background:-webkit-linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
    background:-moz-linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
    background:-o-linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
    background:linear-gradient(top, #ffffff 20%, #f6f6f6 50%, #eeeeee 52%, #f4f4f4 100%);
    background-clip:padding-box;
    box-shadow:0 0 3px white inset, 0 1px 1px rgba(0, 0, 0, 0.1);
    text-decoration:none;
    white-space:nowrap;
    line-height:24px;
}

.with_frm_style .chosen-container-single .chosen-single span{
    margin-right:26px;
    display:block;
    overflow:hidden;
    white-space:nowrap;
    text-overflow:ellipsis;
}

.with_frm_style .chosen-container-single .chosen-single-with-deselect span{
    margin-right:38px;
}

.with_frm_style .chosen-container-single .chosen-single abbr{
    display:block;
    position:absolute;
    right:26px;
    top:6px;
    width:12px;
    height:12px;
    font-size:1px;
    background:url('//landing.ai/content/plugins/formidable/pro/images/chosen-sprite.png') -42px 1px no-repeat;
}

.with_frm_style .chosen-container-single .chosen-single abbr:hover{
    background-position:-42px -10px;
}

.with_frm_style .chosen-container-single.chosen-disabled .chosen-single abbr:hover{
    background-position:-42px -10px;
}

.with_frm_style .chosen-container-single .chosen-single div{
    position:absolute;
    right:0;
    top:0;
    display:block;
    height:100%;
    width:18px;
}

.with_frm_style .chosen-container-single .chosen-single div b{
    background:url('//landing.ai/content/plugins/formidable/pro/images/chosen-sprite.png') no-repeat 0 2px;
    display:block;
    width:100%;
    height:100%;
}

.with_frm_style .chosen-container-single .chosen-search{
    padding:3px 4px;
    position:relative;
    margin:0;
    white-space:nowrap;
    z-index:1010;
}

.with_frm_style .chosen-container-single .chosen-search input[type="text"]{
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
    width:100% !important;
    max-width:100% !important;
    height:auto;
    background:white url('//landing.ai/content/plugins/formidable/pro/images/chosen-sprite.png') no-repeat 100% -20px;
    background:url('//landing.ai/content/plugins/formidable/pro/images/chosen-sprite.png') no-repeat 100% -20px;
    font-size:1em;
    font-family:sans-serif;
    line-height:normal;
    border-radius:0;
}

.with_frm_style .chosen-container-single .chosen-drop{
    margin-top:-1px;
    border-radius:0 0 4px 4px;
    background-clip:padding-box;
}

.with_frm_style .chosen-container-single.chosen-container-single-nosearch .chosen-search{
    position:absolute;
    left:-9999px;
}

.with_frm_style .chosen-container .chosen-results{
    cursor:text;
    overflow-x:hidden;
    overflow-y:auto;
    position:relative;
    margin:0 4px 4px 0;
    padding:0 0 0 4px;
    max-height:240px;
    word-wrap:break-word;
    -webkit-overflow-scrolling:touch;
}

.with_frm_style .chosen-container .chosen-results li:before{
	background:none;
}

.with_frm_style .chosen-container .chosen-results li{
    display:none;
    margin:0;
    padding:5px 6px;
    list-style:none;
    line-height:15px;
    -webkit-touch-callout:none;
}

.with_frm_style .chosen-container .chosen-results li.active-result{
    display:list-item;
    cursor:pointer;
}

.with_frm_style .chosen-container .chosen-results li.disabled-result{
    display:list-item;
    color:#ccc;
    cursor:default;
}

.with_frm_style .chosen-container .chosen-results li.highlighted{
    background-color:#3875d7;
    color:#fff;
}

.with_frm_style .chosen-container .chosen-results li.no-results{
    display:list-item;
    background:#f4f4f4;
}

.with_frm_style .chosen-container .chosen-results li.group-result{
    display:list-item;
    font-weight:bold;
    cursor:default;
}

.with_frm_style .chosen-container .chosen-results li.group-option{
    padding-left:15px;
}

.with_frm_style .chosen-container .chosen-results li em{
    font-style:normal;
    text-decoration:underline;
}

.with_frm_style .chosen-container-multi .chosen-choices{
    position:relative;
    overflow:hidden;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
    margin:0;
    padding:0 5px;
    width:100%;
    height:auto !important;
    height:1%;
    cursor:text;
}

.with_frm_style .chosen-container-multi .chosen-choices li{
    float:left;
    list-style:none;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-field{
    margin:0;
    padding:0;
    white-space:nowrap;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-field input[type="text"]{
    margin:1px 0;
    padding:0 !important;
    height:25px;
    outline:0;
    border:0 !important;
    background:transparent !important;
    box-shadow:none;
    color:#666;
    font-size:100%;
    font-family:sans-serif;
    line-height:normal;
    border-radius:0;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice{
    position:relative;
    margin:3px 5px 3px 0;
    padding:3px 20px 3px 5px;
    border:1px solid #aaa;
    max-width:100%;
    border-radius:3px;
    background-color:#eee;
    background-size:100% 19px;
    background-repeat:repeat-x;
    background-clip:padding-box;
    box-shadow:0 0 2px white inset, 0 1px 0 rgba(0, 0, 0, 0.05);
    color:#333;
    line-height:13px;
    cursor:default;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice .search-choice-close{
    position:absolute;
    top:4px;
    right:3px;
    display:block;
    width:12px;
    height:12px;
    background:url('//landing.ai/content/plugins/formidable/pro/images/chosen-sprite.png') -42px 1px no-repeat;
    font-size:1px;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice .search-choice-close:hover{
    background-position:-42px -10px;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice-disabled{
    padding-right:5px;
    border:1px solid #ccc;
    background-color:#e4e4e4;
    color:#666;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice-focus{
    background:#d4d4d4;
}

.with_frm_style .chosen-container-multi .chosen-choices li.search-choice-focus .search-choice-close{
    background-position:-42px -10px;
}

.with_frm_style .chosen-container-multi .chosen-results{
    margin:0;
    padding:0;
}

.with_frm_style .chosen-container-multi .chosen-drop .result-selected{
    display:list-item;
    color:#ccc;
    cursor:default;
}

.with_frm_style .chosen-container-active .chosen-single{
    border:1px solid #5897fb;
    box-shadow:0 0 5px rgba(0, 0, 0, 0.3);
}

.with_frm_style .chosen-container-active.chosen-with-drop .chosen-single{
    border:1px solid #aaa;
    -moz-border-radius-bottomright:0;
    border-bottom-right-radius:0;
    -moz-border-radius-bottomleft:0;
    border-bottom-left-radius:0;
    box-shadow:0 1px 0 #fff inset;
}

.with_frm_style .chosen-container-active.chosen-with-drop .chosen-single div{
    border-left:none;
    background:transparent;
}

.with_frm_style .chosen-container-active.chosen-with-drop .chosen-single div b{
    background-position:-18px 2px;
}

.with_frm_style .chosen-container-active .chosen-choices li.search-field input[type="text"]{
    color:#111 !important;
}

.with_frm_style .chosen-disabled{
    opacity:0.5 !important;
    cursor:default;
}

.with_frm_style .chosen-disabled .chosen-single{
    cursor:default;
}

.with_frm_style .chosen-disabled .chosen-choices .search-choice .search-choice-close{
    cursor:default;
}

.with_frm_style .chosen-rtl{
    text-align:right;
}

.with_frm_style .chosen-rtl .chosen-single{
    overflow:visible;
    padding:0 8px 0 0;
}

.with_frm_style .chosen-rtl .chosen-single span{
    margin-right:0;
    margin-left:26px;
    direction:rtl;
}

.with_frm_style .chosen-rtl .chosen-single-with-deselect span{
    margin-left:38px;
}

.with_frm_style .chosen-rtl .chosen-single div{
    right:auto;
    left:3px;
}

.with_frm_style .chosen-rtl .chosen-single abbr{
    right:auto;
    left:26px;
}

.with_frm_style .chosen-rtl .chosen-choices li{
    float:right;
}

.with_frm_style .chosen-rtl .chosen-choices li.search-field input[type="text"]{
    direction:rtl;
}

.with_frm_style .chosen-rtl .chosen-choices li.search-choice{
    margin:3px 5px 3px 0;
    padding:3px 5px 3px 19px;
}

.with_frm_style .chosen-rtl .chosen-choices li.search-choice .search-choice-close{
    right:auto;left:4px;
}

.with_frm_style .chosen-rtl.chosen-container-single-nosearch .chosen-search, .with_frm_style .chosen-rtl .chosen-drop{
    left:9999px;
}

.with_frm_style .chosen-rtl.chosen-container-single .chosen-results{
    margin:0 0 4px 4px;
    padding:0 4px 0 0;
}

.with_frm_style .chosen-rtl .chosen-results li.group-option{
    padding-right:15px;
    padding-left:0;
}

.with_frm_style .chosen-rtl.chosen-container-active.chosen-with-drop .chosen-single div{
    border-right:none;
}

.with_frm_style .chosen-rtl .chosen-search input[type="text"]{
    padding:4px 5px 4px 20px;
    background:white url('//landing.ai/content/plugins/formidable/pro/images/chosen-sprite.png') no-repeat -30px -20px;background:url('//landing.ai/content/plugins/formidable/pro/images/chosen-sprite.png') no-repeat -30px -20px;
    direction:rtl;
}

.with_frm_style .chosen-rtl.chosen-container-single .chosen-single div b{
    background-position:6px 2px;
}

.with_frm_style .chosen-rtl.chosen-container-single.chosen-with-drop .chosen-single div b{
    background-position:-12px 2px;
}
/* End Chosen */

@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-resolution: 144dpi){
    .with_frm_style .chosen-rtl .chosen-search input[type="text"],
    .with_frm_style .chosen-container-single .chosen-single abbr,
    .with_frm_style .chosen-container-single .chosen-single div b,
    .with_frm_style .chosen-container-single .chosen-search input[type="text"],
    .with_frm_style .chosen-container-multi .chosen-choices .search-choice .search-choice-close,
    .with_frm_style .chosen-container .chosen-results-scroll-down span,
    .with_frm_style .chosen-container .chosen-results-scroll-up span{
        background-image:url('//landing.ai/content/plugins/formidable/pro/images/chosen-sprite2x.png') !important;
        background-size:52px 37px !important;
        background-repeat:no-repeat !important;
    }
}/*
* The MIT License
* Copyright (c) 2012 Matias Meno <m@tias.me>
*/
@-webkit-keyframes passing-through {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40px);
		-moz-transform: translateY(40px);
		-ms-transform: translateY(40px);
		-o-transform: translateY(40px);
		transform: translateY(40px);
	}
	30%, 70% {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-ms-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}
	100% {
		opacity: 0;
		-webkit-transform: translateY(-40px);
		-moz-transform: translateY(-40px);
		-ms-transform: translateY(-40px);
		-o-transform: translateY(-40px);
		transform: translateY(-40px);
	}

}
@-moz-keyframes passing-through {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40px);
		-moz-transform: translateY(40px);
		-ms-transform: translateY(40px);
		-o-transform: translateY(40px);
		transform: translateY(40px);
	}
	30%, 70% {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-ms-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}
	100% {
		opacity: 0;
		-webkit-transform: translateY(-40px);
		-moz-transform: translateY(-40px);
		-ms-transform: translateY(-40px);
		-o-transform: translateY(-40px);
		transform: translateY(-40px);
	}

}
@keyframes passing-through {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40px);
		-moz-transform: translateY(40px);
		-ms-transform: translateY(40px);
		-o-transform: translateY(40px);
		transform: translateY(40px);
	}
	30%, 70% {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-ms-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}
	100% {
		opacity: 0;
		-webkit-transform: translateY(-40px);
		-moz-transform: translateY(-40px);
		-ms-transform: translateY(-40px);
		-o-transform: translateY(-40px);
		transform: translateY(-40px);
	}

}
@-webkit-keyframes slide-in {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40px);
		-moz-transform: translateY(40px);
		-ms-transform: translateY(40px);
		-o-transform: translateY(40px);
		transform: translateY(40px);
	}
	30% {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-ms-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}

}
@-moz-keyframes slide-in {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40px);
		-moz-transform: translateY(40px);
		-ms-transform: translateY(40px);
		-o-transform: translateY(40px);
		transform: translateY(40px);
	}
	30% {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-ms-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}

}
@keyframes slide-in {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40px);
		-moz-transform: translateY(40px);
		-ms-transform: translateY(40px);
		-o-transform: translateY(40px);
		transform: translateY(40px);
	}
	30% {
		opacity: 1;
		-webkit-transform: translateY(0px);
		-moz-transform: translateY(0px);
		-ms-transform: translateY(0px);
		-o-transform: translateY(0px);
		transform: translateY(0px);
	}

}
@-webkit-keyframes pulse {
	0% {
		-webkit-transform: scale(1);
		-moz-transform: scale(1);
		-ms-transform: scale(1);
		-o-transform: scale(1);
		transform: scale(1);
	}
	10% {
		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
		-ms-transform: scale(1.1);
		-o-transform: scale(1.1);
		transform: scale(1.1);
	}
	20% {
		-webkit-transform: scale(1);
		-moz-transform: scale(1);
		-ms-transform: scale(1);
		-o-transform: scale(1);
		transform: scale(1);
	}

}
@-moz-keyframes pulse {
	0% {
		-webkit-transform: scale(1);
		-moz-transform: scale(1);
		-ms-transform: scale(1);
		-o-transform: scale(1);
		transform: scale(1);
	}
	10% {
		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
		-ms-transform: scale(1.1);
		-o-transform: scale(1.1);
		transform: scale(1.1);
	}
	20% {
		-webkit-transform: scale(1);
		-moz-transform: scale(1);
		-ms-transform: scale(1);
		-o-transform: scale(1);
		transform: scale(1);
	}

}
@keyframes pulse {
	0% {
		-webkit-transform: scale(1);
		-moz-transform: scale(1);
		-ms-transform: scale(1);
		-o-transform: scale(1);
		transform: scale(1);
	}
	10% {
		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
		-ms-transform: scale(1.1);
		-o-transform: scale(1.1);
		transform: scale(1.1);
	}
	20% {
		-webkit-transform: scale(1);
		-moz-transform: scale(1);
		-ms-transform: scale(1);
		-o-transform: scale(1);
		transform: scale(1);
	}

}
.frm_dropzone, .frm_dropzone * {
	box-sizing: border-box;
}

.frm_dropzone.dz-clickable {
	min-height: 150px;
	border: 2px dashed #dfdfdf;
	background:#ffffff;
	padding: 20px 20px;
	border-radius:5px;
	cursor: pointer;
	margin-top:5px;
	line-height:1.42857143;
}
.frm_dropzone.dz-clickable * {
	cursor: default;
}

.frm_dropzone.dz-clickable.frm_single_upload{
	max-width: 200px;
}
.frm_dropzone .dz-message{
	display:none;
	font-size:20px;
	text-align: center;
	margin: .5em 0 1em;
}
.frm_dropzone.dz-clickable.frm_single_upload .dz-message{
	margin: 0 0 .5em 0;
}
.frm_dropzone.dz-clickable .dz-message,
.frm_dropzone .frm_upload_icon{
	display:block;
}
.frm_dropzone.dz-clickable .dz-message,
.frm_dropzone.dz-clickable .dz-message * {
	cursor: pointer;
}
#frm_form_editor_container .frm_dropzone.dz-clickable,
#frm_form_editor_container .frm_dropzone.dz-clickable *{
	cursor: default;
}
.frm_dropzone.dz-started .dz-message {
	display: none;
}
.frm_dropzone.dz-drag-hover .dz-message {
	opacity: 0.5;
}
.frm_dropzone .frm_upload_icon:before{
	font-size:40px;
}
.frm_dropzone .frm_small_text {
	font-size:14px;
}
.frm_dropzone.dz-drag-hover {
	border-style: solid;
}
.frm_dropzone .dz-preview {
	position: relative;
	display: inline-block;
	vertical-align: top;
	margin: 16px;
	min-height: 100px;
}
.frm_dropzone .dz-preview:hover {
	z-index: 1000;
}
.frm_dropzone .dz-preview:hover .dz-details {
	opacity: 1;
}
.frm_dropzone .dz-preview.dz-file-preview .dz-image {
	border-radius: 20px;
	background: #999;
	background: linear-gradient(to bottom, #eee, #ddd);
}
.frm_dropzone .dz-preview.dz-file-preview .dz-details {
	opacity: 1;
}
.frm_dropzone .dz-preview.dz-image-preview .dz-details {
	-webkit-transition: opacity 0.2s linear;
	-moz-transition: opacity 0.2s linear;
	-ms-transition: opacity 0.2s linear;
	-o-transition: opacity 0.2s linear;
	transition: opacity 0.2s linear;
}
.frm_dropzone .dz-preview .dz-remove {
	font-size: 14px;
	text-align: center;
	display: block;
	cursor: pointer;
	border: none;
}
.frm_dropzone .dz-preview .dz-remove:hover {
	text-decoration: underline;
}
.frm_dropzone .dz-preview:hover .dz-details {
	opacity: 1;
}
.frm_dropzone .dz-preview .dz-details {
	z-index: 20;
	position: absolute;
	top: 0;
	left: 0;
	opacity: 0;
	font-size: 13px;
	min-width: 100%;
	max-width: 100%;
	padding: 2em 1em;
	text-align: center;
	color: rgba(0, 0, 0, 0.9);
	line-height: 150%;
}
.frm_dropzone .dz-preview .dz-details .dz-size {
	margin-bottom: 1em;
	font-size: 16px;
}
.frm_dropzone .dz-preview .dz-details .dz-filename {
	white-space: nowrap;
}
.frm_dropzone .dz-preview .dz-details .dz-filename:hover span {
	border: 1px solid rgba(200, 200, 200, 0.8);
	background-color: rgba(255, 255, 255, 0.8);
}
.frm_dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
	overflow: hidden;
	text-overflow: ellipsis;
}
.frm_dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
	border: 1px solid transparent;
}
.frm_dropzone .dz-preview .dz-details .dz-filename span,
.frm_dropzone .dz-preview .dz-details .dz-size span {
	background-color: rgba(255, 255, 255, 0.4);
	padding: 0 0.4em;
	border-radius: 3px;
}
.frm_dropzone .dz-preview .dz-details .dz-filename a{
	cursor:pointer;
}

.frm_dropzone .dz-preview:hover .dz-image img {
	-webkit-transform: scale(1.05, 1.05);
	-moz-transform: scale(1.05, 1.05);
	-ms-transform: scale(1.05, 1.05);
	-o-transform: scale(1.05, 1.05);
	transform: scale(1.05, 1.05);
	-webkit-filter: blur(8px);
	filter: blur(8px);
}
.frm_dropzone .dz-preview .dz-image {
	border-radius: 20px;
	overflow: hidden;
	width: 120px;
	height: 120px;
	position: relative;
	display: block;
	z-index: 10;
}
.frm_dropzone .dz-preview .dz-image img {
	display: block;
	margin:0 auto;
}
.frm_dropzone .dz-preview.dz-success .dz-success-mark {
	-webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
	-moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
	-ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
	-o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
	animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
}
.frm_dropzone .dz-preview.dz-error .dz-error-mark {
	opacity: 1;
	-webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
	-moz-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
	-ms-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
	-o-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
	animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
}
.frm_dropzone .dz-preview .dz-success-mark, .frm_dropzone .dz-preview .dz-error-mark {
	pointer-events: none;
	opacity: 0;
	z-index: 500;
	position: absolute;
	display: block;
	top: 50%;
	left: 50%;
	margin-left: -27px;
	margin-top: -27px;
}
.frm_dropzone .dz-preview .dz-success-mark svg, .frm_dropzone .dz-preview .dz-error-mark svg {
	display: block;
	width: 54px;
	height: 54px;
}
.frm_dropzone .dz-preview.dz-processing .dz-progress {
	opacity: 1;
	-webkit-transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-ms-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	transition: all 0.2s linear;
}
.frm_dropzone .dz-preview.dz-complete .dz-progress {
	opacity: 0;
	-webkit-transition: opacity 0.4s ease-in;
	-moz-transition: opacity 0.4s ease-in;
	-ms-transition: opacity 0.4s ease-in;
	-o-transition: opacity 0.4s ease-in;
	transition: opacity 0.4s ease-in;
}
.frm_dropzone .dz-preview:not(.dz-processing) .dz-progress {
	-webkit-animation: pulse 6s ease infinite;
	-moz-animation: pulse 6s ease infinite;
	-ms-animation: pulse 6s ease infinite;
	-o-animation: pulse 6s ease infinite;
	animation: pulse 6s ease infinite;
}
.frm_dropzone .dz-preview .dz-progress {
	opacity: 1;
	z-index: 1000;
	pointer-events: none;
	position: absolute;
	height: 16px;
	left: 50%;
	top: 50%;
	margin-top: -8px;
	width: 80px;
	margin-left: -40px;
	background: rgba(255, 255, 255, 0.9);
	-webkit-transform: scale(1);
	border-radius: 8px;
	overflow: hidden;
}
.frm_dropzone .dz-preview .dz-progress .dz-upload {
	background: #333;
	background: linear-gradient(to bottom, #666, #444);
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	width: 0;
	-webkit-transition: width 300ms ease-in-out;
	-moz-transition: width 300ms ease-in-out;
	-ms-transition: width 300ms ease-in-out;
	-o-transition: width 300ms ease-in-out;
	transition: width 300ms ease-in-out;
}
.frm_dropzone .dz-preview.dz-error .dz-error-message {
	display: block;
	opacity: 1;
	pointer-events: auto;
}
.frm_dropzone .dz-preview .dz-error-message {
	pointer-events: none;
	z-index: 1000;
	position: absolute;
	display: block;
	display: none;
	opacity: 0;
	-webkit-transition: opacity 0.3s ease;
	-moz-transition: opacity 0.3s ease;
	-ms-transition: opacity 0.3s ease;
	-o-transition: opacity 0.3s ease;
	transition: opacity 0.3s ease;
	border-radius: 8px;
	font-size: 13px;
	top: 29px;
	left: -10px;
	width: 140px;
	background: #be2626;
	background: linear-gradient(to bottom, #be2626, #a92222);
	padding: 0.5em 1.2em;
	color: white;
}

.frm_dropzone .fallback input[type=file]{
	display:block;
}

/* Compact version */
.frm_compact_text{
	display:none;
}

.frm_compact .frm_dropzone.dz-clickable{
	min-height:60px;
	padding:0;
	margin-top:0;
	border:none;
	background-color:transparent;
}

.frm_compact .frm_dropzone.dz-clickable.frm_single_upload{
	max-width:100%;
}

.frm_compact .frm_compact_text{
	display:inline;
}

.frm_compact .frm_dropzone.dz-clickable.frm_single_upload .dz-message,
.frm_compact .frm_dropzone.dz-clickable .dz-message{
	font-size:14px;
	border:1px solid #dfdfdf;
	background:#fff;
	display: inline-block;
	border-radius: 4px;
	padding: 6px 11px;
	box-sizing: border-box;
	box-shadow: 0 1px 1px #eeeeee;
	vertical-align: middle;
}

.frm_compact .frm_dropzone .frm_upload_icon:before{
	font-size:22px;
	padding-right:7px;
	vertical-align: middle;
}

.frm_compact .frm_dropzone .frm_upload_icon{
	display:inline;
}

.frm_compact .frm_dropzone .dz-preview{
	min-height:20px;
	max-width:175px;
	margin:5px;
}

.frm_compact .frm_dropzone .frm_upload_text,
.frm_compact .frm_dropzone .frm_small_text,
.frm_compact .frm_dropzone .dz-preview .dz-image,
.frm_compact .frm_dropzone .dz-preview .dz-details .dz-size{
	display:none;
}

.frm_compact .frm_dropzone .dz-preview.dz-error .dz-error-message{
	top: -40px;
	padding: 4px;
	width: auto;
	text-align: center;
}

.frm_compact .frm_dropzone .dz-preview .dz-success-mark,
.frm_compact .frm_dropzone .dz-preview .dz-error-mark{
	margin-left: -16px;
    margin-top: 0;
    top: 6px;
}

.frm_compact .frm_dropzone .dz-preview:hover .dz-error-mark{
	display:none;
}

.frm_compact .frm_dropzone .dz-preview .dz-success-mark svg,
.frm_compact .frm_dropzone .dz-preview .dz-error-mark svg{
	height:35px;
	width:35px;
}

.frm_compact .frm_dropzone .dz-preview .dz-details{
	opacity:1;
	position:relative;
	padding:5px;
}

.frm_compact .frm_dropzone .dz-preview .dz-details .dz-filename {
	overflow: hidden;
	text-overflow: ellipsis;
}

.frm_compact .frm_dropzone .dz-preview .dz-details .dz-filename span{
	border:none;
	background:transparent;
}

/* Prevent horizontal scroll on RTL sites */
.frm-show-form .dz-hidden-input{
	display:none;
}
.frm_rootline_group{
	margin: 20px 0 30px;
}
			
ul.frm_page_bar{
	list-style-type: none;
	margin: 0 !important;
	padding: 0;
	width: 100%;
	float: left;
	display: table;
	display: -webkit-flex;
	display: flex;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
}

ul.frm_page_bar li{
	display: inline-block;
	-ms-flex: 1;
	flex: 1;
}

.frm_forms .frm_page_bar input,
.frm_forms .frm_page_bar input:disabled{
	transition: background-color 0.1s ease;
	color: #ffffff;
	background-color: #dddddd;
	font-size: 18px;
	border-width: 2px;
	border-style: solid;
	border-color: #dfdfdf;
}

.frm_forms .frm_page_bar input:focus{
	outline: none;
}

.frm_forms .frm_progress_line input.frm_page_back{
	background-color: #008ec2;
}

.frm_forms .frm_page_bar .frm_current_page input[type="button"]{
	background-color: #dddddd;
	border-color: #dfdfdf;
}
	
.frm_rootline_single{
	text-align: center;
	margin: 0;
	padding: 0;
}

.frm_current_page .frm_rootline_title{
	color: #008ec2;
}

.frm_rootline_title,
.frm_pages_complete
.frm_percent_complete{
	font-size:14px;
	padding:4px;
}

.frm_pages_complete {
	float: right;
	margin-right:13px;
}

.frm_percent_complete {
	float: left;
	margin-left:13px;
}

.frm_forms .frm_progress_line input,
.frm_forms .frm_progress_line input:disabled {
	width: 100%;
	border: none;
	border-top: 1px solid #dfdfdf;
	border-bottom: 1px solid #dfdfdf;
	box-shadow: inset 0px 10px 20px -15px #aaa;
	margin: 5px 0;
	padding: 6px;
	border-radius:0;
}

.frm_forms .frm_progress_line.frm_show_lines input {
	border-left: 1px solid #ffffff;
	border-right: 1px solid #ffffff;
}

.frm_forms .frm_progress_line li:first-of-type input {
	border-top-left-radius: 15px;
	border-bottom-left-radius: 15px;
	border-left: 1px solid #008ec2;
}

.frm_forms .frm_progress_line li:last-of-type input {
	border-top-right-radius: 15px;
	border-bottom-right-radius: 15px;
	border-right: 1px solid #008ec2;
}

.frm_forms .frm_progress_line li:last-of-type input.frm_page_skip {
	border-right: 1px solid #dfdfdf;
}

.frm_forms .frm_progress_line .frm_current_page input[type="button"] {
	border-left: 1px solid #dfdfdf;
}

.frm_forms .frm_progress_line.frm_show_lines .frm_current_page input[type="button"] {
	border-right: 1px solid #ffffff;
}

.frm_forms .frm_progress_line input.frm_page_back {
	border-color: #008ec2;
}

.frm_forms .frm_progress_line.frm_show_lines input.frm_page_back{
	border-left-color: #008ec2;
	border-right-color: #ffffff;
}

.frm_rootline.frm_show_lines:before {
    border-top-width: 2px;
	border-top-style: solid;
	border-top-color: #dfdfdf;
    content: "";
    margin: 0 auto;
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    z-index: -1;
}

.frm_rootline.frm_show_lines{
	position: relative;
    z-index: 1;
}

.frm_rootline.frm_show_lines span{
	display:block;
}

.frm_forms .frm_rootline input {
	width: 30px;
	height: 30px;
	border-radius: 30px;
	padding:0;
}

.frm_forms .frm_rootline input:focus {
	border-color: #008ec2;
}

.frm_forms .frm_rootline .frm_current_page input[type="button"] {
	border-color: #007aae;
	background-color: #008ec2;
	color: #ffffff;
}

.frm_forms .frm_progress_line input,
.frm_forms .frm_progress_line input:disabled,
.frm_forms .frm_progress_line .frm_current_page input[type="button"],
.frm_forms .frm_rootline.frm_no_numbers input,
.frm_forms .frm_rootline.frm_no_numbers .frm_current_page input[type="button"] {
	color: transparent !important;
}

@media only screen and (max-width: 700px) {
	.frm_progress span.frm_rootline_title,
	.frm_rootline.frm_rootline_10 span.frm_rootline_title,
	.frm_rootline.frm_rootline_9 span.frm_rootline_title,
	.frm_rootline.frm_rootline_8 span.frm_rootline_title,
	.frm_rootline.frm_rootline_7 span.frm_rootline_title,
	.frm_rootline.frm_rootline_6 span.frm_rootline_title,
	.frm_rootline.frm_rootline_5 span.frm_rootline_title{
		display:none;
	}
}

@media only screen and (max-width: 500px) {
	.frm_rootline.frm_rootline_4 span.frm_rootline_title,
	.frm_rootline.frm_rootline_3 span.frm_rootline_title{
		display:none;
	}
}

/* Responsive */
@media only screen and (max-width: 900px) {
	.frm_form_field .frm_repeat_grid .frm_form_field.frm_sixth label.frm_primary_label,
	.frm_form_field .frm_repeat_grid .frm_form_field.frm_seventh label.frm_primary_label,
	.frm_form_field .frm_repeat_grid .frm_form_field.frm_eighth label.frm_primary_label{
    	display: block !important;
	}

	.frm_form_field .frm_repeat_grid .frm_form_field.frm_repeat_buttons.frm_seventh label.frm_primary_label{
		display:none !important;
	}

}

@media only screen and (max-width: 600px) {
    .frm_form_field.frm_four_col .frm_radio,
    .frm_form_field.frm_four_col .frm_checkbox{
        width:48%;
        margin-right:4%;
    }

    .frm_form_field.frm_four_col .frm_radio:nth-child(2n+2),
    .frm_form_field.frm_four_col .frm_checkbox:nth-child(2n+2){
    	margin-right:0;
    }

	.frm_form_field .frm_repeat_grid.frm_first_repeat .frm_form_field.frm_repeat_buttons:not(.frm_fourth):not(.frm_sixth):not(.frm_eighth) label.frm_primary_label{
		display:none !important;
	}

	.frm_form_field .frm_repeat_grid .frm_form_field.frm_fifth label.frm_primary_label{
		display:block !important;
	}

	.frm_form_field .frm_repeat_grid .frm_form_field.frm_repeat_buttons.frm_fifth label.frm_primary_label{
		display:none !important;
	}
}

@media only screen and (max-width: 500px) {
    .frm_form_field.frm_two_col .frm_radio,
    .frm_form_field.frm_two_col .frm_checkbox,
    .frm_form_field.frm_three_col .frm_radio,
    .frm_form_field.frm_three_col .frm_checkbox{
        width: auto;
        margin-right: 0;
        float: none;
        display:block;
    }

	.frm_form_field input[type=file] {
		max-width:220px;
	}

	.with_frm_style.frm_login_form.frm_inline_login p{
		clear:both;
		float:none;
	}

	.with_frm_style.frm_login_form.frm_inline_login form{
		position:static;
	}

	.with_frm_style.frm_login_form.frm_inline_login .login-remember{
		position:static;
	}

	.with_frm_style .frm-g-recaptcha > div > div,
	.with_frm_style .g-recaptcha > div > div{
		width:inherit !important;
		display:block;
		overflow:hidden;
		max-width:302px;
		border-right:1px solid #d3d3d3;
		border-radius:4px;
		box-shadow:2px 0px 4px -1px rgba(0,0,0,.08);
		-moz-box-shadow:2px 0px 4px -1px rgba(0,0,0,.08);
	}

	.with_frm_style .g-recaptcha iframe,
	.with_frm_style .frm-g-recaptcha iframe{
		width:100%;
	}
}
