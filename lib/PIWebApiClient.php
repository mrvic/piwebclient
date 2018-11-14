<?php



namespace PIWebAPI\Client;


class PIWebApiClient
{
	public $home = NULL;
	public $analysis = NULL;
	public $analysisCategory  = NULL;
	public $analysisRulePlugIn = NULL;
	public $analysisRule = NULL;
	public $analysisTemplate = NULL;
	public $assetDatabase = NULL;
	public $assetServer = NULL;
	public $attributeCategory  = NULL;
	public $attribute  = NULL;
	public $attributeTemplate = NULL;
	public $attributeTrait = NULL;
	public $batch  = NULL;
	public $calculation  = NULL;
	public $channel = NULL;
	public $dataServer  = NULL;
	public $elementCategory  = NULL;
	public $element  = NULL;
	public $elementTemplate  = NULL;
	public $enumerationSet  = NULL;
	public $enumerationValue = NULL;
	public $eventFrame  = NULL;
	public $point  = NULL;
	public $securityIdentity  = NULL;
	public $securityMapping  = NULL;
	public $stream  = NULL;
	public $streamSet  = NULL;
	public $system  = NULL;
	public $configuration  = NULL;
	public $tableCategory  = NULL;
	public $table = NULL;
	public $timeRulePlugIn  = NULL;
	public $timeRule  = NULL;
	public $unitClass  = NULL;
	public $unit  = NULL;
	public function __construct($host, $username, $password, $authMethod, $debug, $validateSSL)
	{
		$config = new Configuration();
		$config->setUsername($username);
		$config->setPassword($password);
		$config->setAuthMethod($authMethod);
		$config->setHost($host);
		$config->setDebug($debug);
		$config->setSSLVerification($validateSSL);
		$apiClient = new ApiClient($config);
		$this->analysis = new Api\AnalysisApi($apiClient);
		$this->analysisCategory = new Api\AnalysisCategoryApi($apiClient);
		$this->analysisRulePlugIn = new Api\AnalysisRulePlugInApi($apiClient);
		$this->analysisRule = new Api\AnalysisRuleApi($apiClient);
		$this->analysisTemplate = new Api\AnalysisTemplateApi($apiClient);
		$this->assetDatabase = new Api\AssetDatabaseApi($apiClient);
		$this->assetServer = new Api\AssetServerApi($apiClient);
		$this->attributeCategory = new Api\AttributeCategoryApi($apiClient);
		$this->attribute = new Api\AttributeApi($apiClient);
		$this->attributeTemplate = new Api\AttributeTemplateApi($apiClient);
		$this->attributeTrait = new Api\AttributeTraitApi($apiClient);
		$this->batch  = new Api\BatchApi($apiClient);
		$this->calculation  = new Api\CalculationApi($apiClient);
		$this->channel = new Api\ChannelApi($apiClient);
		$this->dataServer  = new Api\DataServerApi($apiClient);
		$this->elementCategory  = new Api\ElementCategoryApi($apiClient);
		$this->element  = new Api\ElementApi($apiClient);
		$this->elementTemplate  = new Api\ElementTemplateApi($apiClient);
		$this->enumerationSet  = new Api\EnumerationSetApi($apiClient);
		$this->enumerationValue = new Api\EnumerationValueApi($apiClient);
		$this->eventFrame = new Api\EventFrameApi($apiClient);
		$this->home = new Api\HomeApi($apiClient);
		$this->point= new Api\PointApi($apiClient);
		$this->securityIdentity = new Api\SecurityIdentityApi($apiClient);
		$this->securityMapping = new Api\SecurityMappingApi($apiClient);
		$this->stream = new Api\StreamApi($apiClient);
		$this->streamSet = new Api\StreamSetApi($apiClient);
		$this->system= new Api\SystemApi($apiClient);
		$this->configuration  = new Api\ConfigurationApi($apiClient);;
		$this->tableCategory = new Api\TableCategoryApi($apiClient);
		$this->table= new Api\TableApi($apiClient);
		$this->timeRulePlugIn= new Api\TimeRulePlugInApi($apiClient);
		$this->timeRule = new Api\TimeRuleApi($apiClient);
		$this->unitClass = new Api\UnitClassApi($apiClient);
		$this->unit = new Api\UnitApi($apiClient);
	}
	
}
