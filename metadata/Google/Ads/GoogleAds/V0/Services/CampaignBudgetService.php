<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/campaign_budget_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Services;

class CampaignBudgetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\CampaignBudget::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad40c0a3e676f6f676c652f6164732f676f6f676c656164732f76302f73" .
            "657276696365732f63616d706169676e5f6275646765745f736572766963" .
            "652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e" .
            "76302e73657276696365731a1c676f6f676c652f6170692f616e6e6f7461" .
            "74696f6e732e70726f746f1a20676f6f676c652f70726f746f6275662f66" .
            "69656c645f6d61736b2e70726f746f1a1e676f6f676c652f70726f746f62" .
            "75662f77726170706572732e70726f746f1a17676f6f676c652f7270632f" .
            "7374617475732e70726f746f22310a1847657443616d706169676e427564" .
            "6765745265717565737412150a0d7265736f757263655f6e616d65180120" .
            "01280922b2010a1c4d757461746543616d706169676e4275646765747352" .
            "65717565737412130a0b637573746f6d65725f6964180120012809124d0a" .
            "0a6f7065726174696f6e7318022003280b32392e676f6f676c652e616473" .
            "2e676f6f676c656164732e76302e73657276696365732e43616d70616967" .
            "6e4275646765744f7065726174696f6e12170a0f7061727469616c5f6661" .
            "696c75726518032001280812150a0d76616c69646174655f6f6e6c791804" .
            "2001280822f3010a1743616d706169676e4275646765744f706572617469" .
            "6f6e122f0a0b7570646174655f6d61736b18042001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e4669656c644d61736b12430a066372656174" .
            "6518012001280b32312e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76302e7265736f75726365732e43616d706169676e4275646765744800" .
            "12430a0675706461746518022001280b32312e676f6f676c652e6164732e" .
            "676f6f676c656164732e76302e7265736f75726365732e43616d70616967" .
            "6e427564676574480012100a0672656d6f76651803200128094800420b0a" .
            "096f7065726174696f6e22a1010a1d4d757461746543616d706169676e42" .
            "756467657473526573706f6e736512310a157061727469616c5f6661696c" .
            "7572655f6572726f7218032001280b32122e676f6f676c652e7270632e53" .
            "7461747573124d0a07726573756c747318022003280b323c2e676f6f676c" .
            "652e6164732e676f6f676c656164732e76302e73657276696365732e4d75" .
            "7461746543616d706169676e427564676574526573756c7422330a1a4d75" .
            "7461746543616d706169676e427564676574526573756c7412150a0d7265" .
            "736f757263655f6e616d6518012001280932b3030a1543616d706169676e" .
            "4275646765745365727669636512bd010a1147657443616d706169676e42" .
            "7564676574123a2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "302e73657276696365732e47657443616d706169676e4275646765745265" .
            "71756573741a312e676f6f676c652e6164732e676f6f676c656164732e76" .
            "302e7265736f75726365732e43616d706169676e427564676574223982d3" .
            "e493023312312f76302f7b7265736f757263655f6e616d653d637573746f" .
            "6d6572732f2a2f63616d706169676e427564676574732f2a7d12d9010a15" .
            "4d757461746543616d706169676e42756467657473123e2e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76302e73657276696365732e4d7574" .
            "61746543616d706169676e42756467657473526571756573741a3f2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76302e7365727669636573" .
            "2e4d757461746543616d706169676e42756467657473526573706f6e7365" .
            "223f82d3e493023922342f76302f637573746f6d6572732f7b637573746f" .
            "6d65725f69643d2a7d2f63616d706169676e427564676574733a6d757461" .
            "74653a012a4281020a24636f6d2e676f6f676c652e6164732e676f6f676c" .
            "656164732e76302e7365727669636573421a43616d706169676e42756467" .
            "65745365727669636550726f746f50015a48676f6f676c652e676f6c616e" .
            "672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f" .
            "676f6f676c656164732f76302f73657276696365733b7365727669636573" .
            "a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e" .
            "56302e5365727669636573ca0220476f6f676c655c4164735c476f6f676c" .
            "654164735c56305c5365727669636573ea0224476f6f676c653a3a416473" .
            "3a3a476f6f676c654164733a3a56303a3a5365727669636573620670726f" .
            "746f33"
        ));

        static::$is_initialized = true;
    }
}

