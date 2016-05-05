<?php

/**
 * @package DataTypes
 */

class DataType_BabelCodes extends DataTypePlugin {
	protected $isEnabled = true;
	protected $dataTypeName = "BabelCodes";
	protected $dataTypeFieldGroup = "babel";
	protected $dataTypeFieldGroupOrder = 51;
	protected $jsModules = array("BabelCodes.js");


	public function generate($generator, $generationContextData) {
		$options = $generationContextData["generationOptions"];
		$allElements = explode("|", $options["values"]);

		$val = "";
		if ($options["listType"] == "Exactly") {
			$val = implode(", ", Utils::returnRandomSubset($allElements, $options["number"]));
		} else {
			// at MOST. So randomly calculate a number up to the num specified
			$numItems = mt_rand(0, $options["number"]);
			$val = implode(", ", Utils::returnRandomSubset($allElements, $numItems));
		}

		return array(
			"display" => $val
		);
	}

	public function getRowGenerationOptionsUI($generator, $postdata, $colNum, $numCols) {
		if (empty($postdata["dtOption_$colNum"])) {
			return false;
		}

		$listType = $postdata["dtListType_$colNum"]; // Exactly or AtMost
		$number   = ($listType == "Exactly") ? $postdata["dtListExactly_$colNum"] : $postdata["dtListAtMost_$colNum"];
		$options = array(
			"listType" => $listType,
			"number"   => $number,
			"values"   => $postdata["dtOption_$colNum"]
		);

		return $options;
	}

	public function getRowGenerationOptionsAPI($generator, $json, $numCols) {
		$listType = $json->settings->listType; // Exactly or AtMost
		$number   = ($listType == "exactly") ? $json->settings->exactly : $json->settings->atMost;
		$options = array(
			"listType" => ucfirst($listType),
			"number"   => $number,
			"values"   => $json->settings->list
		);

		return $options;
	}

	public function getExampleColumnHTML() {
		$L = Core::$language->getCurrentLanguageStrings();
		$html =<<< END
	<select name="dtExample_%ROW%" id="dtExample_%ROW%">
		<option value="">{$L["please_select"]}</option>
		<option value="{$this->L["value_1"]}">{$this->L["label_1"]}</option>
		<option value="{$this->L["value_2"]}">{$this->L["label_2"]}</option>
		<option value="{$this->L["value_3"]}">{$this->L["label_3"]}</option>
		<option value="{$this->L["value_4"]}">{$this->L["label_4"]}</option>
		<option value="{$this->L["value_5"]}">{$this->L["label_5"]}</option>
		<option value="{$this->L["value_6"]}">{$this->L["label_6"]}</option>
		<option value="{$this->L["value_7"]}">{$this->L["label_7"]}</option>
		<option value="{$this->L["value_8"]}">{$this->L["label_8"]}</option>
		<option value="{$this->L["value_9"]}">{$this->L["label_9"]}</option>
		<option value="{$this->L["value_10"]}">{$this->L["label_10"]}</option>
		<option value="{$this->L["value_11"]}">{$this->L["label_11"]}</option>
		<option value="{$this->L["value_12"]}">{$this->L["label_12"]}</option>
		<option value="{$this->L["value_13"]}">{$this->L["label_13"]}</option>
		<option value="{$this->L["value_14"]}">{$this->L["label_14"]}</option>
		<option value="{$this->L["value_15"]}">{$this->L["label_15"]}</option>
		<option value="{$this->L["value_16"]}">{$this->L["label_16"]}</option>
		<option value="{$this->L["value_17"]}">{$this->L["label_17"]}</option>
		<option value="{$this->L["value_18"]}">{$this->L["label_18"]}</option>
		<option value="{$this->L["value_19"]}">{$this->L["label_19"]}</option>
		<option value="{$this->L["value_20"]}">{$this->L["label_20"]}</option>
		<option value="{$this->L["value_21"]}">{$this->L["label_21"]}</option>
		<option value="{$this->L["value_22"]}">{$this->L["label_22"]}</option>
		<option value="{$this->L["value_23"]}">{$this->L["label_23"]}</option>
		<option value="{$this->L["value_24"]}">{$this->L["label_24"]}</option>
		<option value="{$this->L["value_25"]}">{$this->L["label_25"]}</option>
		<option value="{$this->L["value_26"]}">{$this->L["label_26"]}</option>
		<option value="{$this->L["value_27"]}">{$this->L["label_27"]}</option>
		<option value="{$this->L["value_28"]}">{$this->L["label_28"]}</option>
		<option value="{$this->L["value_29"]}">{$this->L["label_29"]}</option>
		<option value="{$this->L["value_30"]}">{$this->L["label_30"]}</option>
		<option value="{$this->L["value_31"]}">{$this->L["label_31"]}</option>
	</select>
	<div>
		&nbsp;{$this->L["separated_by_pipe"]}
	</div>
END;
		return $html;
	}

	public function getOptionsColumnHTML() {
		$html =<<< END
	<div>
		<input type="radio" name="dtListType_%ROW%" id="dtListType1_%ROW%" value="Exactly" checked="checked"  />
		<label for="dtListType1_%ROW%">{$this->L["exactly"]}</label>
		<input type="text" size="2" name="dtListExactly_%ROW%" id="dtListExactly_%ROW%" value="1" />&nbsp;&nbsp;
		<input type="radio" name="dtListType_%ROW%" id="dtListType2_%ROW%" value="AtMost" />
		<label for="dtListType2_%ROW%">{$this->L["at_most"]}</label>
		<input type="text" size="2" name="dtListAtMost_%ROW%" id="dtListAtMost_%ROW%" value="1" />
	</div>
	<div>
		<input type="text" name="dtOption_%ROW%" id="dtOption_%ROW%" style="width: 267px;" />
	</div>
END;
		return $html;
	}

	public function getDataTypeMetadata() {
		return array(
			"SQLField" => "varchar(255) default NULL",
			"SQLField_Oracle" => "varchar2(255) default NULL",
			"SQLField_MSSQL" => "VARCHAR(255) NULL"
		);
	}

	public function getHelpHTML() {
		return "<p>{$this->L["help"]}</p>";
	}
}
