<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPARDBDataAssetByComplianceId请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method integer getComplianceId() 获取合规组ID
 * @method void setComplianceId(integer $ComplianceId) 设置合规组ID
 * @method string getDataSourceType() 获取数据源类型，不填默认过滤非自建的所有关系型数据源类型，填selfbuilt-db只过滤自建类型
 * @method void setDataSourceType(string $DataSourceType) 设置数据源类型，不填默认过滤非自建的所有关系型数据源类型，填selfbuilt-db只过滤自建类型
 * @method string getBuildType() 获取自建还是云上
 * @method void setBuildType(string $BuildType) 设置自建还是云上
 */
class DescribeDSPARDBDataAssetByComplianceIdRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var integer 合规组ID
     */
    public $ComplianceId;

    /**
     * @var string 数据源类型，不填默认过滤非自建的所有关系型数据源类型，填selfbuilt-db只过滤自建类型
     */
    public $DataSourceType;

    /**
     * @var string 自建还是云上
     */
    public $BuildType;

    /**
     * @param string $DspaId DSPA实例ID
     * @param integer $ComplianceId 合规组ID
     * @param string $DataSourceType 数据源类型，不填默认过滤非自建的所有关系型数据源类型，填selfbuilt-db只过滤自建类型
     * @param string $BuildType 自建还是云上
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("BuildType",$param) and $param["BuildType"] !== null) {
            $this->BuildType = $param["BuildType"];
        }
    }
}
