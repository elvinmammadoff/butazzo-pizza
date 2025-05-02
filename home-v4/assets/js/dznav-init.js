var body = $('body');
	
function bpSettings({themeFullColor_value,themeLayout_value,headerOption_value,backgroundColor_value}) {
	
	this.themeFullColor_value = themeFullColor_value || "color_1";
	this.themeLayout_value = themeLayout_value || "wide-layout";
	this.headerOption_value = headerOption_value || "sticky-header";
	this.backgroundColor_value = backgroundColor_value || "color_1";
	
	this.manageLayout();
	this.managePrimaryColor();
	this.manageHeaderOption();
	this.manageBackgroundColorOption();
}

