<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/campaign.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Resources;

class Campaign
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\Bidding::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Common\CustomParameter::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\AdServingOptimizationStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\AdvertisingChannelSubType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\AdvertisingChannelType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\BiddingStrategyType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\CampaignServingStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V0\Enums\CampaignStatus::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a951d0a30676f6f676c652f6164732f676f6f676c656164732f76302f72" .
            "65736f75726365732f63616d706169676e2e70726f746f1221676f6f676c" .
            "652e6164732e676f6f676c656164732e76302e7265736f75726365731a35" .
            "676f6f676c652f6164732f676f6f676c656164732f76302f636f6d6d6f6e" .
            "2f637573746f6d5f706172616d657465722e70726f746f1a42676f6f676c" .
            "652f6164732f676f6f676c656164732f76302f656e756d732f61645f7365" .
            "7276696e675f6f7074696d697a6174696f6e5f7374617475732e70726f74" .
            "6f1a40676f6f676c652f6164732f676f6f676c656164732f76302f656e75" .
            "6d732f6164766572746973696e675f6368616e6e656c5f7375625f747970" .
            "652e70726f746f1a3c676f6f676c652f6164732f676f6f676c656164732f" .
            "76302f656e756d732f6164766572746973696e675f6368616e6e656c5f74" .
            "7970652e70726f746f1a39676f6f676c652f6164732f676f6f676c656164" .
            "732f76302f656e756d732f62696464696e675f73747261746567795f7479" .
            "70652e70726f746f1a3b676f6f676c652f6164732f676f6f676c65616473" .
            "2f76302f656e756d732f63616d706169676e5f73657276696e675f737461" .
            "7475732e70726f746f1a33676f6f676c652f6164732f676f6f676c656164" .
            "732f76302f656e756d732f63616d706169676e5f7374617475732e70726f" .
            "746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70" .
            "726f746f2298170a0843616d706169676e12150a0d7265736f757263655f" .
            "6e616d6518012001280912270a02696418032001280b321b2e676f6f676c" .
            "652e70726f746f6275662e496e74363456616c7565122a0a046e616d6518" .
            "042001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756512500a0673746174757318052001280e32402e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76302e656e756d732e43616d706169" .
            "676e537461747573456e756d2e43616d706169676e53746174757312660a" .
            "0e73657276696e675f73746174757318152001280e324e2e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76302e656e756d732e43616d706169" .
            "676e53657276696e67537461747573456e756d2e43616d706169676e5365" .
            "7276696e675374617475731282010a1e61645f73657276696e675f6f7074" .
            "696d697a6174696f6e5f73746174757318082001280e325a2e676f6f676c" .
            "652e6164732e676f6f676c656164732e76302e656e756d732e4164536572" .
            "76696e674f7074696d697a6174696f6e537461747573456e756d2e416453" .
            "657276696e674f7074696d697a6174696f6e53746174757312720a186164" .
            "766572746973696e675f6368616e6e656c5f7479706518092001280e3250" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76302e656e756d73" .
            "2e4164766572746973696e674368616e6e656c54797065456e756d2e4164" .
            "766572746973696e674368616e6e656c54797065127c0a1c616476657274" .
            "6973696e675f6368616e6e656c5f7375625f74797065180a2001280e3256" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76302e656e756d73" .
            "2e4164766572746973696e674368616e6e656c53756254797065456e756d" .
            "2e4164766572746973696e674368616e6e656c53756254797065123b0a15" .
            "747261636b696e675f75726c5f74656d706c617465180b2001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c7565124e0a" .
            "1575726c5f637573746f6d5f706172616d6574657273180c2003280b322f" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76302e636f6d6d6f" .
            "6e2e437573746f6d506172616d6574657212550a106e6574776f726b5f73" .
            "657474696e6773180e2001280b323b2e676f6f676c652e6164732e676f6f" .
            "676c656164732e76302e7265736f75726365732e43616d706169676e2e4e" .
            "6574776f726b53657474696e677312530a0d686f74656c5f73657474696e" .
            "6718202001280b323c2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76302e7265736f75726365732e43616d706169676e2e486f74656c5365" .
            "7474696e67496e666f12670a1a64796e616d69635f7365617263685f6164" .
            "735f73657474696e6718212001280b32432e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76302e7265736f75726365732e43616d706169676e" .
            "2e44796e616d696353656172636841647353657474696e6712550a107368" .
            "6f7070696e675f73657474696e6718242001280b323b2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76302e7265736f75726365732e43616d" .
            "706169676e2e53686f7070696e6753657474696e6712350a0f63616d7061" .
            "69676e5f62756467657418062001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c756512690a1562696464696e675f7374" .
            "7261746567795f7479706518162001280e324a2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76302e656e756d732e42696464696e67537472" .
            "617465677954797065456e756d2e42696464696e67537472617465677954" .
            "79706512300a0a73746172745f6461746518132001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c756512340a0e63616d" .
            "706169676e5f67726f757018232001280b321c2e676f6f676c652e70726f" .
            "746f6275662e537472696e6756616c7565122e0a08656e645f6461746518" .
            "142001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756512380a1062696464696e675f73747261746567791817200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "654800123f0a0a6d616e75616c5f63706318182001280b32292e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76302e636f6d6d6f6e2e4d616e" .
            "75616c4370634800123f0a0a6d616e75616c5f63706d18192001280b3229" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76302e636f6d6d6f" .
            "6e2e4d616e75616c43706d480012530a146d6178696d697a655f636f6e76" .
            "657273696f6e73181e2001280b32332e676f6f676c652e6164732e676f6f" .
            "676c656164732e76302e636f6d6d6f6e2e4d6178696d697a65436f6e7665" .
            "7273696f6e734800125c0a196d6178696d697a655f636f6e76657273696f" .
            "6e5f76616c7565181f2001280b32372e676f6f676c652e6164732e676f6f" .
            "676c656164732e76302e636f6d6d6f6e2e4d6178696d697a65436f6e7665" .
            "7273696f6e56616c75654800123f0a0a7461726765745f637061181a2001" .
            "280b32292e676f6f676c652e6164732e676f6f676c656164732e76302e63" .
            "6f6d6d6f6e2e546172676574437061480012410a0b7461726765745f726f" .
            "6173181d2001280b322a2e676f6f676c652e6164732e676f6f676c656164" .
            "732e76302e636f6d6d6f6e2e546172676574526f6173480012430a0c7461" .
            "726765745f7370656e64181b2001280b322b2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76302e636f6d6d6f6e2e5461726765745370656e" .
            "64480012410a0b70657263656e745f63706318222001280b322a2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76302e636f6d6d6f6e2e5065" .
            "7263656e7443706348001a85020a0f4e6574776f726b53657474696e6773" .
            "12380a147461726765745f676f6f676c655f73656172636818012001280b" .
            "321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75651239" .
            "0a157461726765745f7365617263685f6e6574776f726b18022001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e426f6f6c56616c7565123a0a" .
            "167461726765745f636f6e74656e745f6e6574776f726b18032001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512410a" .
            "1d7461726765745f706172746e65725f7365617263685f6e6574776f726b" .
            "18042001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56" .
            "616c75651a480a10486f74656c53657474696e67496e666f12340a0f686f" .
            "74656c5f63656e7465725f696418012001280b321b2e676f6f676c652e70" .
            "726f746f6275662e496e74363456616c75651aec010a1744796e616d6963" .
            "53656172636841647353657474696e6712310a0b646f6d61696e5f6e616d" .
            "6518012001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c756512330a0d6c616e67756167655f636f646518022001280b" .
            "321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565" .
            "123a0a167573655f737570706c6965645f75726c735f6f6e6c7918032001" .
            "280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c7565" .
            "122d0a08666565645f69647318042003280b321b2e676f6f676c652e7072" .
            "6f746f6275662e496e74363456616c75651ae2010a0f53686f7070696e67" .
            "53657474696e6712300a0b6d65726368616e745f696418012001280b321b" .
            "2e676f6f676c652e70726f746f6275662e496e74363456616c756512330a" .
            "0d73616c65735f636f756e74727918022001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c756512360a1163616d706169" .
            "676e5f7072696f7269747918032001280b321b2e676f6f676c652e70726f" .
            "746f6275662e496e74333256616c756512300a0c656e61626c655f6c6f63" .
            "616c18042001280b321a2e676f6f676c652e70726f746f6275662e426f6f" .
            "6c56616c7565421b0a1963616d706169676e5f62696464696e675f737472" .
            "617465677942d2010a25636f6d2e676f6f676c652e6164732e676f6f676c" .
            "656164732e76302e7265736f7572636573420d43616d706169676e50726f" .
            "746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f" .
            "746f2f676f6f676c65617069732f6164732f676f6f676c656164732f7630" .
            "2f7265736f75726365733b7265736f7572636573a20203474141aa022147" .
            "6f6f676c652e4164732e476f6f676c654164732e56302e5265736f757263" .
            "6573ca0221476f6f676c655c4164735c476f6f676c654164735c56305c52" .
            "65736f7572636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

