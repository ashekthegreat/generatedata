<?php

$L = array();

$L["DATA_TYPE"] = array(
    "NAME" => "Health Care Indicator",
    "DESC" => "Generates one or more random values from an arbitrary list of items."
);

$L["at_most"] = "At Most";
$L["exactly"] = "Exactly";
$L["help"] = "Enter a list of items, separated by a pipe | character. Then select whether you want <b>Exactly</b> X number of items, or <b>At most</b> X items from the list. Multiple items are returned in a comma-delimited list in the results. If you want your data set to include empty values, just add one or more pipe characters at the end - the more pipes you enter, the greater the probability of an empty value being generated.";
$L["separated_by_pipe"] = "Enter values separated by |";
$L["incomplete_fields"] = "The Custom List Data Type needs to have the format entered in the Options text field. Please fix the following rows:";
$L["invalid_int_fields"] = "Please only enter numbers in the \"Exactly\" and \"At Most\" fields for the Custom List Data Type. Please fix the following rows:";

/*Indicators*/
$L["label_1"] = "Generic";
$L["value_1"] = "No|Not Applicable|Other|Unknown|Yes";
$L["label_2"] = "Billable Member";
$L["value_2"] = "Yes, the member is billable|No, the member is not billable";
$L["label_3"] = "Capitated Encounter";
$L["value_3"] = "No|Not Applicable|Other|Unknown|Yes|services are paid under a capitated arrangement|services are not paid under a capitated arrangement|unknown";
$L["label_4"] = "Compound Drug";
$L["value_4"] = "Compund drug|No|Non-compound drug|Not Applicable|Other|Unknown|Yes";
$L["label_5"] = "Health Plan";
$L["value_5"] = "High deductible|Not high deductible|No|Yes";
$L["label_6"] = "EPSDT Indicator";
$L["value_6"] = "EPSDT Referral|EPSDT Screen|EPSDT Treatment|Unknown / Not Applicable / Not Available";
$L["label_7"] = "Family Planning";
$L["value_7"] = "Unknown / Not Applicable / Not Avail|Family planning services provided|Abortion services provided|Sterilization services provided|No family planning services provided";
$L["label_8"] = "Generic Drug";
$L["value_8"] = "Branded|Generic|No|Not Applicable|Other|Unknown|Yes";
$L["label_9"] = "Grandfathered Plan";
$L["value_9"] = "No|Yes|Grandfathered|Non-Grandfathered|Transitional|Not Applicable";
$L["label_10"] = "InNetwork";
$L["value_10"] = "1 Participating|2 Non-Participating|3 Unknown/Not Coded|9 No Network for this Plan";
$L["label_11"] = "Medicare Plan";
$L["value_11"] = "Advantage|No Medicare Coverage|Not Applicable|Part A and B|Part A Only|Part B Only|Part C Only|Part D Only";
$L["label_12"] = "Other Insurance Coverage";
$L["value_12"] = "0 No|1 Yes, other coverage is primary|2 Yes, other coverage is secondary|9 Unknown";
$L["label_13"] = "Plan Risk";
$L["value_13"] = "1 Risk (under Maryland contract)|2 Risk (under non-Maryland contract)|3 ASO (employer self-insured)";
$L["label_14"] = "Single-Multiple Source";
$L["value_14"] = "Multi-source brand|Multi-source brand with generic equivalent|Single source brand|Single source brand with generic equivalent|Unknown";
$L["label_15"] = "Special Coverage";
$L["value_15"] = "Commonwealth Care|Health Safety Net|Not Applicable";


