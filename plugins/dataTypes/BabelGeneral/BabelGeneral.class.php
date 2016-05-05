<?php

/**
 * @package DataTypes
 */

class DataType_BabelGeneral extends DataTypePlugin {
	protected $isEnabled = true;
	protected $dataTypeName = "BabelGeneral";
	protected $dataTypeFieldGroup = "babel";
	protected $dataTypeFieldGroupOrder = 50;
	protected $jsModules = array("BabelGeneral.js");


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
