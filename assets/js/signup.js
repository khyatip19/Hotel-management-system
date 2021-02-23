function updatelength(password, pass_length) {
	current_length = document.getElementById("password").value.length;
	field_mlen = document.getElementById("password").maxLength;
	document.getElementById("pass_length").innerHTML=current_length+'/'+field_mlen;
	return 1;
}
function check_y_pass(password, pass_length) {
	pass_buffer_value1 = document.getElementById("password").value;
	pass_level2 = 0;
	if (pass_buffer_value1 .match(/[a-z]/g)) {
		pass_level2++;
	}

	if (pass_buffer_valuel .match(/[A-Z]/g)) {
		pass_level2++;
	}
	if (pass buffer value .match(/[0-9]/g)) {
		pass_level2++;
	}
	if (pass_buffer_value1 .length <5) {
		if(pass_level2 >= 1) pass level2--;
	} else if ( pass_buffer_valuel .length >= 20) {
		pass_level2++;
	}

pass_length_val = '';
	switch (pass_level2) {
		case 1: pass_length_val='Week';break;
		case 2: pass_length_val="Normal"; break;
		case 3: pass_length_val='Strong';break;
		case 4: pass_length_val='Very strong';break;
		default: pass_length_val='Very weak';break;
	}
	if (document.getElementById("pass_length").value != pass_level2) {
		document.getElementById("pass_length").value = pass_level2;
		document.getElementById("pass_length").innerHTML = pass_length_val;
	}
	return 1;
}
function compare_valid(password, c_password) {
	fld_val = document.getElementById("password").value;
	fld2_val = document.getElementById("c_password").value;
	if (fld_val == fld2_val) {
		update_css_class(c_password, 2);
		p_valid_r = 1;
	} else {
		update_css_class(c_password, 1);
		p_valid_r = 0;
	}
	return p_valid_r;
}
function check_v_mail(email) {
	fld_value=document.getElementById("email").value;
	is_m_valid = 0;
	if (fld_value.indexOf('@') >= 1) {
		m_valid_dom = fld_value.substr(fld_value.indexOf('@')+1);
		if (m_valid_dom.indexOf('@') == -1) {
			if (m_valid_dom.indexOf('.') >= 1) {
				m_valid_dom_e = m_valid_dom.substr(m_valid_dom.indexOf('.')+1);
				if (m_valid_dom_e.length >= 1) {
					is_m_valid = 1;
				}
			}
		}
	}
	if (is_m_valid) {
		update_css_class(email, 2);
		m_valid_r = 1;
	} else {
		update_css_class(email, 1);
		m_valid_r = 0;
	}
	return m_valid_r;
}

function valid_length(email) {
	length_df = document.getElementById("email").value.length;
	if (length_df >= 1 && length_df <= document.getElementById("email").maxLength)
	{
		update_css_class(email, 2);
		ret_len = 1;
	} else {
		update_css_class(email, 1);
		ret_len = 0;
	}
	return ret_len;
}
function update_css_class(email, class_index) {
	if (class_index == 1){
		class_s = 'wrong';
	} else if (class_index == 2) {
		class_s = 'correct';
	}
	document.getElementById("email").className = class_s
	return 1;
}
function validate_all(results) {
	t1 = valid_length('login');
	t2 = valid_length('password');
	t3 = compare_valid('password', 'c_password');
	t4 = check_v_mail('email');
	t5 = check_v_pass('password', 'pass_length');
	errorlist='';
	if (! tl){
		errorlist +='Username is too short/long<br/>';
	}
	if (! t2){
		errorlist += 'Password is too short/long<br/>';
	}
	if (! t3) {
		errorlist += 'Passwords are not the same <br/>';
	}
	if (! t4) {
		errorlist += 'Invalid Email<br/>';
	}
	if (errorlist){
		document.getElementById("form").innerHTML = errorlist;
		return false;
	}
return true;
}
