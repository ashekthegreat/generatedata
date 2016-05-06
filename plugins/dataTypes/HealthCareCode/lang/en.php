<?php

$L = array();

$L["DATA_TYPE"] = array(
    "NAME" => "Health Care Code",
    "DESC" => "Generates one or more random values from an arbitrary list of items."
);

$L["at_most"] = "At Most";
$L["exactly"] = "Exactly";
$L["help"] = "Enter a list of items, separated by a pipe | character. Then select whether you want <b>Exactly</b> X number of items, or <b>At most</b> X items from the list. Multiple items are returned in a comma-delimited list in the results. If you want your data set to include empty values, just add one or more pipe characters at the end - the more pipes you enter, the greater the probability of an empty value being generated.";
$L["separated_by_pipe"] = "Enter values separated by |";
$L["incomplete_fields"] = "The Custom List Data Type needs to have the format entered in the Options text field. Please fix the following rows:";
$L["invalid_int_fields"] = "Please only enter numbers in the \"Exactly\" and \"At Most\" fields for the Custom List Data Type. Please fix the following rows:";

/*Codes*/
$L["label_1"] = "Admission Type";
$L["value_1"] = "Elective|Emergency|Information not available|Newborn|Not a hospital inpatient record|Reserved for National Assignment|Trauma Center|Urgent";
$L["label_2"] = "Annual Family Deductible";
$L["value_2"] = "Deductible Total greater than $6,000|Deductible Total of $1,000 thru $1,999|Deductible Total of $2,000 thru $2,999|Deductible Total of $3,000 thru $3,999|Deductible Total of $4,000 thru $4,999|Deductible Total of $5,000 thru $5,999|Deductible Total under $1,000|No per family deductible|Not Applicable";
$L["label_3"] = "Annual Person Deductible";
$L["value_3"] = "Deductible Total greater than $3000|Deductible Total of $1,000 thru $1,999|Deductible Total of $2,000 thru $2,999|Deductible Total under $1,000|No per person deductible|Not Applicable";
$L["label_4"] = "APCD ID";
$L["value_4"] = "FIG - Fully-Insured Commercial Group Enrollee|GIC - Group Insurance Commission Enrollee|ICO - Integrated Care Organization|MCO - MassHealth Managed Care Organization Enrollee|SIG - Self-Insured Group Enrollee|Supplemental Policy Enrollee|Unknown / Not Applicable";
$L["label_5"] = "Business Type";
$L["value_5"] = "CSO - Computer Service Organization|DBA - Delegated Business Administrator|DBM - Dental Benefit Manager|Other|PBM - Pharmacy Benefit Manger|Risk Holder|TPA - Third Party Administrator|Unknown / Not Applicable";
$L["label_6"] = "Claim Status";
$L["value_6"] = "Denied|Not our claim, forwarded to additional payer(s)|Predetermination Pricing Only - no payment|Processed as primary|Processed as primary|Processed as primary, forwarded to additional payer(s)|Processed as primary, forwarded to additional payer(s)|Processed as secondary|Processed as secondary|Processed as secondary, forwarded to additional payer(s)|Processed as secondary, forwarded to additional payer(s)|Processed as tertiary|Processed as tertiary|Processed as tertiary, forwarded to additional payer(s)|Processed as tertiary, forwarded to additional payer(s)|Reversal of previous payment|Reversal of previous payment|Final Bill|Capitated or Global Contract Services";
$L["label_7"] = "Claim Related Condition";
$L["value_7"] = "0 Non-accident (default)|1 Work|2 Auto Accident|3 Other Accident|9 Unknown";
$L["label_8"] = "Coverage Level";
$L["value_8"] = "Children Only|Dependents Only|Employee and Children|Employee and Life Partner|Employee and Spouse|Employee Only|Family|Individual|Spouse and Children|Spouse Only|Unknown|Employee plus N where N equals the number of other covered dependents";
$L["label_9"] = "Dispense as Written";
$L["value_9"] = "Brand dispensed as generic|Member dispense as written|No generic available|Not dispensed as written|Other|Override|Pharmacy dispense as written|Physician dispense as written|Substitution allowed - generic drug not available in marketplace|Substitution not allowed - brand drug mandated by law";
$L["label_10"] = "Drug Route of Admin.";
$L["value_10"] = "Buccal|Dental|Enteral|Inhalation|Injection|Intraperitoneal|Irrigation|Mouth / Throat|Mucous Membrane|Nasal|Not Specified|Ophthalmic|Oral|Other / Misc|Otic|Perfusion|Rectal|Sublingual|Topical|Transdermal|Translingual|Urethral|Vaginal";
$L["label_11"] = "Employee Type";
$L["value_11"] = "H|Q|S|T|U";
$L["label_12"] = "Employer Group Size";
$L["value_12"] = "A – 1|B – 2 to 50|C – 51 to 100|D – 100+";
$L["label_13"] = "Individual Relationship";
$L["value_13"] = "Cadaver Donor|Child|Child Where Insured Has No Financial Responsibility|Dependent|Dependent of a Minor Dependent|Emancipated Minor|Employee/Self|Father|Foster Child|Grandfather or Grandmother|Grandson or Granddaughter|Handicapped Dependent|Injured Plaintiff|Life Partner|Mother|Nephew or Niece|Organ Donor|Other Adult|Other Dependent|Significant Other|Sponsored Dependent|Spouse|Stepson or Stepdaughter|Unknown|Ward|Other Adult";
$L["label_14"] = "Insurance Plan Market";
$L["value_14"] = "COBRA|Group|Group - POS|Group COBRA|Group-Commonwealth Choice|Group-Employer|Group-Federal|Group-GIC|Group-Merged Market|Group-Municipality|Group-Retiree|Group-Senior Care Option|Group-Union|Health Exchange|Individual - Commonwealth Care|Individual - Commonwealth Choice|Individual Closed|Individual COBRA|Individual Senior Care Option|Individual Young Adult|Medicare Part A|Medicare Part B|Medicare Part C|Medicare Part D|MediGap/Medicare Supplemental/Medex|Other|Other Medicare|Student";
$L["label_15"] = "Insurance Product Type";
$L["value_15"] = "Automobile Medical|Blue Cross / Blue Shield|Central Certification|CHAMPUS|Commercial Insurance|Commercial Insurance|Commonwealth Care|Commonwealth Choice|Dental|Dental Maintenance Organization (DMO)|Dental Maintenance Organization (DMO)|Disability|Exclusive Provider Organization (EPO)|Health Maintenance Organization|Health Maintenance Organization|Health Maintenance Organization (HMO) Medicare Advantage|Health Maintenance Organization (HMO) Medicare Advantage|HMO Medicare Risk/Medicare Part C|HMO Medicare Risk/Medicare Part C|HSN Trust Fund|Indemnity Insurance|Indemnity Insurance|Liability|Liability Medical|Medicaid|Medicaid|Medicaid Managed Care Organization|Medicare Advantage PPO|Medicare Advantage Private Fee for Service|Medicare Part A|Medicare Part A|Medicare Part B|Medicare Part B|Medicare Part D|Medicare Part D|Medicare Primary|Medicare Primary|Medicare Secondary Plan|Medicare Supplemental (Medi-gap) plan|Other|Other|Other Federal Program (e.g. Black Lung)|Other Non-Federal Programs|Point of Service (POS)|Point of Service (POS)|Preferred Provider Organization (PPO)|Preferred Provider Organization (PPO)|Qualified Medicare Beneficiary|Qualified Medicare Beneficiary|Self-pay|Senior Care Option|Supplemental Policy|Supplemental Policy|Title V|Title V|Veterans Administration Plan|Workers'' Compensation|Exclusive Provider Organization (in any form)|Health Maintenance Organization|Indemnity|Point of Service (POS)|Preferred Provider Organization (PPO)|Limited Benefit Plan (Mini-Meds)|Student Health Plan|Catastrophic|Exclusive Provider Organization (in any form)|Health Maintenance Organization|Indemnity|Point of Service (POS)|Preferred Provider Organization (PPO)|Limited Benefit Plan (Mini-Meds)|Student Health Plan|Catastrophic";
$L["label_16"] = "Market Category";
$L["value_16"] = "policies sold and issued directly to employers having 50 or more employees|Employers having 10 thru 25 employees|Employers having 101 thru 250 employees|Employers having 2 thru 9 employees|Employers having 251 thru 500 employees|Employers having 26 thru 50 employees|Employers having 51 thru 100 employees|Employers having exactly 1 employee|Employers having more than 500 employees|Individuals (non-group)|Individuals (non-group)|Individuals as a Senior Care Option|Individuals as group conversion Policies|Individuals on a franchise basis|Individuals on a franchise basis|Other types of entities. Insurers using this market code shall obtain prior approval.|Other types of entities. Insurers using this market code shall obtain prior approval.|Small employers through a qualified|Small employers through a qualified";
$L["label_17"] = "Medical Claim Type";
$L["value_17"] = "Facility|Professional|Reimbursement Form";
$L["label_18"] = "Member Race Info Source";
$L["value_18"] = "1 Enrollee reported to payor|2 Enrollee reported to another source|9 Missing/Unknown/Not specified";
$L["label_19"] = "Payer Organization Type";
$L["value_19"] = "1 Health Maintenance Organization|2 Life &amp; Health Insurance Company or Not-for-Profit Health Benefit Plan|3 Third-Party Administrator (TPA) Unit";
$L["label_20"] = "Payment Arrangement Type";
$L["value_20"] = "Bundled Payment|Capitation|DRG|Fee for Service|Global Payment|Other|Pay for Performance|Payment Amount Per Episode (PAPE) (MassHealth)|Percent of Charges";
$L["label_21"] = "PBM Organization ID";
$L["value_21"] = "1 Processed Internally by Payor|2 Argus Health Systems, Inc.|3 Caremark, LLC|4 Catalyst Rx, Inc.|5 Envision Pharmaceutical Services, Inc.|6 Express Scripts, Inc.|7 Medco Health, LLC|8 National Employee Benefit Companies, Inc. dba/Ideal Scripts|9 NextRx Services, Inc.|A Atlantic Prescription Services, LLC|B Benecard Services, Inc.|C BioScrip PBM Services, LLC|D Futurescripts, LLC|E Health E Systems |F HealthTran, LLC|G Innoviant, Inc.|H MaxorPlus|I Medical Security Card Company|J MedImpact Healthcare Systems, Inc.|K MemberHealth, LLC|L PharmaCare Management Services, LLC|M Prime Therapeutics, LLC|N Progressive Medical, Inc.|O RxAmerica, LLC|P RxSolutions, Inc.|Q Scrip World, LLC|R Tmesys, Inc.|S WellDynerx, Inc.|T Other Source Not Listed|Z Unknown";
$L["label_22"] = "Plan Risk Basis";
$L["value_22"] = "Fully insured|Self insured";
$L["label_23"] = "Point of Origin";
$L["value_23"] = "0 Not a hospital inpatient record|1 Non-Health Facility Point of Origin|1 Normal delivery|2 Clinic or Physician’s Office|2 Premature delivery|3 Reserved for national assignment|3 Sick baby|4 Not used|4 Transfer from a Hospital (Different Facility)|5 Born inside this hospital|5 Transfer from a Skilled Nursing Facility (SNF) or Intermediate Care Facility (ICF)|6 Born outside of this hospital|6 Transfer from Another Health Care Facility|8 Court/Law Enforcement|9 Information not available|9 Information Not Available";
$L["label_24"] = "Pool Code";
$L["value_24"] = "Regular State Employees and Retirees,plus local authorities|Elderly Governmental Retirees (EGR) and Retired Municipal Teachers (RMTs)";
$L["label_25"] = "Procedure Code Type";
$L["value_25"] = "American Dental Association (ADA) Procedure Code (Also referred to as CDT code.)|CPT Category II|CPT or HCPCS Level 1 Code|HCPCS Level II Code|HCPCS Level III Code (State Medicare code).|State defined Procedure Code";
$L["label_26"] = "Product Benefit Type";
$L["value_26"] = "Accident Only|Behavioral Health|Dental|Medical and Pharmacy bundled|Medical Comprehensive|Medical Only|Other|Pharmacy Only|Vision";
$L["label_27"] = "Product Line of Business";
$L["value_27"] = "Accident Only|Basic Hospital|CHAMPUS|Dental Maintenance Organization|Disability|Exclusive Provider Organization (EPO)|Health Maintenance Organization (HMO) Medicare Advantage|HMO - Closed|HMO - Open|HSN Trust Fund|Indemnity Insurance|Individual|Liability Medical|Medicaid FFS|Medicaid Managed Care Organization|Medicaid Primary Care Clinician Plan|Medicare|Medicare Advantage PPO|Medicare Advantage Private Fee for Service|Medicare Primary|Medicare Secondary Plan|Other|Other Federal Program (e.g. Black Lung)|Point of Service (POS)|Preferred Provider Organization (PPO)|Preferred Provider Organization (PPO)|Qualified Medicare Beneficiary/SLMB|Self-Administered Group|Senior Care Option|Supplemental Policy|Title V|Unemployment|Veterans Administration Plan|Vision|Workers'' Compensation";
$L["label_28"] = "Provider Entity Type";
$L["value_28"] = "Facility|IPA|Practioner|Provider|Academic Institution|Acute Hospital|Adult Foster Care Ambulance Services|Chronic Hospital|Clinician (PV034 = 1)|Community Health Center - General|Community Health Center - Urgent Care|DMH Hospital|DPH Hospital|Elm t|Freestanding Ambulatory Surgery Center|Government Agency|Health Care Corporation|Home Health Agency|Hospital Based Clinic|Hospital Emergency Center|Hospital Licensed Ambulatory Surgery Center|Hospital Licensed Health Center|Licensed Hospital Satellite Emergency Facility|Licensed Hospital Satellite Facility|Non-Health Corporations|Nurse (PV034 = 1)|Nursing Home|Other Clinic|Other Facility|Other Individual or Group (PV034 = 1 or 3)|Pharmacy / Site or Mail Order (PV034 = 4 or 5)|Physician (PV034 = 1)|Physician Group (PV034 = 3)|Psychiatric Hospital|Rehabilitation Hospital|Rest Home|School Based Health Center|Stand-Alone, Walk-In/Urgent Care Clinic|State Hospital|Sub-Acute Hospital|Technician (PV034 = 1)|Veterans Hospital";
$L["label_29"] = "Provider ID";
$L["value_29"] = "E-Site|Facility|Financial Parent|Other|Person|Professional Group|Retail Site|Transportation";
$L["label_30"] = "Risk Type";
$L["value_30"] = "Fully Insured|Other|Product available to risk and self- insured accounts|Self-Insured";
$L["label_31"] = "Service Unit Type";
$L["value_31"] = "0 Values reported as zero (no allowed services)|1 Transportation (ambulance air or ground) Miles |2 Anesthesia Time Units|3 Services|4 Oxygen Units|5 Units of Blood|6 Allergy Tests|7 Lab Tests|8 Minutes of Anesthesia (waiver required)";
