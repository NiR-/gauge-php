<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: messages.proto

namespace GPBMetadata;

class Messages
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Spec::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9f260a0e6d657373616765732e70726f746f120e67617567652e6d6573" .
            "73616765731a0a737065632e70726f746f22140a124b696c6c50726f6365" .
            "73735265717565737422580a17457865637574696f6e5374617475735265" .
            "73706f6e7365123d0a0f657865637574696f6e526573756c741801200128" .
            "0b32242e67617567652e6d657373616765732e50726f746f457865637574" .
            "696f6e526573756c7422570a18457865637574696f6e5374617274696e67" .
            "52657175657374123b0a1463757272656e74457865637574696f6e496e66" .
            "6f18012001280b321d2e67617567652e6d657373616765732e4578656375" .
            "74696f6e496e666f22550a16457865637574696f6e456e64696e67526571" .
            "75657374123b0a1463757272656e74457865637574696f6e496e666f1801" .
            "2001280b321d2e67617567652e6d657373616765732e457865637574696f" .
            "6e496e666f225b0a1c53706563457865637574696f6e5374617274696e67" .
            "52657175657374123b0a1463757272656e74457865637574696f6e496e66" .
            "6f18012001280b321d2e67617567652e6d657373616765732e4578656375" .
            "74696f6e496e666f22590a1a53706563457865637574696f6e456e64696e" .
            "6752657175657374123b0a1463757272656e74457865637574696f6e496e" .
            "666f18012001280b321d2e67617567652e6d657373616765732e45786563" .
            "7574696f6e496e666f225f0a205363656e6172696f457865637574696f6e" .
            "5374617274696e6752657175657374123b0a1463757272656e7445786563" .
            "7574696f6e496e666f18012001280b321d2e67617567652e6d6573736167" .
            "65732e457865637574696f6e496e666f225d0a1e5363656e6172696f4578" .
            "65637574696f6e456e64696e6752657175657374123b0a1463757272656e" .
            "74457865637574696f6e496e666f18012001280b321d2e67617567652e6d" .
            "657373616765732e457865637574696f6e496e666f225b0a1c5374657045" .
            "7865637574696f6e5374617274696e6752657175657374123b0a14637572" .
            "72656e74457865637574696f6e496e666f18012001280b321d2e67617567" .
            "652e6d657373616765732e457865637574696f6e496e666f22590a1a5374" .
            "6570457865637574696f6e456e64696e6752657175657374123b0a146375" .
            "7272656e74457865637574696f6e496e666f18012001280b321d2e676175" .
            "67652e6d657373616765732e457865637574696f6e496e666f22b8010a0d" .
            "457865637574696f6e496e666f122d0a0b63757272656e74537065631801" .
            "2001280b32182e67617567652e6d657373616765732e53706563496e666f" .
            "12350a0f63757272656e745363656e6172696f18022001280b321c2e6761" .
            "7567652e6d657373616765732e5363656e6172696f496e666f122d0a0b63" .
            "757272656e745374657018032001280b32182e67617567652e6d65737361" .
            "6765732e53746570496e666f12120a0a737461636b747261636518042001" .
            "2809224a0a0853706563496e666f120c0a046e616d651801200128091210" .
            "0a0866696c654e616d6518022001280912100a0869734661696c65641803" .
            "20012808120c0a0474616773180420032809223c0a0c5363656e6172696f" .
            "496e666f120c0a046e616d6518012001280912100a0869734661696c6564" .
            "180220012808120c0a0474616773180320032809224e0a0853746570496e" .
            "666f12300a047374657018012001280b32222e67617567652e6d65737361" .
            "6765732e45786563757465537465705265717565737412100a0869734661" .
            "696c6564180220012808228c010a12457865637574655374657052657175" .
            "65737412160a0e61637475616c537465705465787418012001280912160a" .
            "0e706172736564537465705465787418022001280912170a0f7363656e61" .
            "72696f4661696c696e67180320012808122d0a0a706172616d6574657273" .
            "18042003280b32192e67617567652e6d657373616765732e506172616d65" .
            "74657222430a135374657056616c69646174655265717565737412100a08" .
            "7374657054657874180120012809121a0a126e756d6265724f6650617261" .
            "6d657465727318022001280522d3010a145374657056616c696461746552" .
            "6573706f6e7365120f0a07697356616c696418012001280812140a0c6572" .
            "726f724d65737361676518022001280912410a096572726f725479706518" .
            "032001280e322e2e67617567652e6d657373616765732e5374657056616c" .
            "6964617465526573706f6e73652e4572726f725479706522510a09457272" .
            "6f725479706512210a1d535445505f494d504c454d454e544154494f4e5f" .
            "4e4f545f464f554e44100012210a1d4455504c49434154455f535445505f" .
            "494d504c454d454e544154494f4e1001224d0a1453756974654578656375" .
            "74696f6e526573756c7412350a0b7375697465526573756c741801200128" .
            "0b32202e67617567652e6d657373616765732e50726f746f537569746552" .
            "6573756c7422120a10537465704e616d65735265717565737422220a1153" .
            "7465704e616d6573526573706f6e7365120d0a0573746570731801200328" .
            "09221e0a1c5363656e6172696f4461746153746f7265496e697452657175" .
            "657374221a0a18537065634461746153746f7265496e6974526571756573" .
            "74221b0a1953756974654461746153746f7265496e697452657175657374" .
            "223d0a11506172616d65746572506f736974696f6e12130a0b6f6c64506f" .
            "736974696f6e18012001280512130a0b6e6577506f736974696f6e180220" .
            "01280522b8010a0f5265666163746f725265717565737412340a0c6f6c64" .
            "5374657056616c756518012001280b321e2e67617567652e6d6573736167" .
            "65732e50726f746f5374657056616c756512340a0c6e6577537465705661" .
            "6c756518022001280b321e2e67617567652e6d657373616765732e50726f" .
            "746f5374657056616c756512390a0e706172616d506f736974696f6e7318" .
            "032003280b32212e67617567652e6d657373616765732e506172616d6574" .
            "6572506f736974696f6e22480a105265666163746f72526573706f6e7365" .
            "120f0a0773756363657373180120012808120d0a056572726f7218022001" .
            "280912140a0c66696c65734368616e67656418032003280922240a0f5374" .
            "65704e616d655265717565737412110a097374657056616c756518012001" .
            "2809224d0a10537465704e616d65526573706f6e736512150a0d69735374" .
            "657050726573656e7418012001280812100a08737465704e616d65180220" .
            "03280912100a08686173416c696173180320012808222d0a1a556e737570" .
            "706f727465644d657373616765526573706f6e7365120f0a076d65737361" .
            "676518012001280922fe120a074d65737361676512380a0b6d6573736167" .
            "655479706518012001280e32232e67617567652e6d657373616765732e4d" .
            "6573736167652e4d6573736167655479706512110a096d65737361676549" .
            "64180220012803124a0a18657865637574696f6e5374617274696e675265" .
            "717565737418032001280b32282e67617567652e6d657373616765732e45" .
            "7865637574696f6e5374617274696e675265717565737412520a1c737065" .
            "63457865637574696f6e5374617274696e67526571756573741804200128" .
            "0b322c2e67617567652e6d657373616765732e5370656345786563757469" .
            "6f6e5374617274696e6752657175657374124e0a1a737065634578656375" .
            "74696f6e456e64696e675265717565737418052001280b322a2e67617567" .
            "652e6d657373616765732e53706563457865637574696f6e456e64696e67" .
            "52657175657374125a0a207363656e6172696f457865637574696f6e5374" .
            "617274696e675265717565737418062001280b32302e67617567652e6d65" .
            "7373616765732e5363656e6172696f457865637574696f6e537461727469" .
            "6e675265717565737412560a1e7363656e6172696f457865637574696f6e" .
            "456e64696e675265717565737418072001280b322e2e67617567652e6d65" .
            "7373616765732e5363656e6172696f457865637574696f6e456e64696e67" .
            "5265717565737412520a1c73746570457865637574696f6e537461727469" .
            "6e675265717565737418082001280b322c2e67617567652e6d6573736167" .
            "65732e53746570457865637574696f6e5374617274696e67526571756573" .
            "74124e0a1a73746570457865637574696f6e456e64696e67526571756573" .
            "7418092001280b322a2e67617567652e6d657373616765732e5374657045" .
            "7865637574696f6e456e64696e6752657175657374123e0a126578656375" .
            "74655374657052657175657374180a2001280b32222e67617567652e6d65" .
            "7373616765732e45786563757465537465705265717565737412460a1665" .
            "7865637574696f6e456e64696e6752657175657374180b2001280b32262e" .
            "67617567652e6d657373616765732e457865637574696f6e456e64696e67" .
            "5265717565737412400a137374657056616c696461746552657175657374" .
            "180c2001280b32232e67617567652e6d657373616765732e537465705661" .
            "6c69646174655265717565737412420a147374657056616c696461746552" .
            "6573706f6e7365180d2001280b32242e67617567652e6d65737361676573" .
            "2e5374657056616c6964617465526573706f6e736512480a176578656375" .
            "74696f6e537461747573526573706f6e7365180e2001280b32272e676175" .
            "67652e6d657373616765732e457865637574696f6e537461747573526573" .
            "706f6e7365123a0a10737465704e616d657352657175657374180f200128" .
            "0b32202e67617567652e6d657373616765732e537465704e616d65735265" .
            "7175657374123c0a11737465704e616d6573526573706f6e736518102001" .
            "280b32212e67617567652e6d657373616765732e537465704e616d657352" .
            "6573706f6e736512420a147375697465457865637574696f6e526573756c" .
            "7418112001280b32242e67617567652e6d657373616765732e5375697465" .
            "457865637574696f6e526573756c74123e0a126b696c6c50726f63657373" .
            "5265717565737418122001280b32222e67617567652e6d65737361676573" .
            "2e4b696c6c50726f636573735265717565737412520a1c7363656e617269" .
            "6f4461746153746f7265496e69745265717565737418132001280b322c2e" .
            "67617567652e6d657373616765732e5363656e6172696f4461746153746f" .
            "7265496e697452657175657374124a0a18737065634461746153746f7265" .
            "496e69745265717565737418142001280b32282e67617567652e6d657373" .
            "616765732e537065634461746153746f7265496e69745265717565737412" .
            "4c0a1973756974654461746153746f7265496e6974526571756573741815" .
            "2001280b32292e67617567652e6d657373616765732e5375697465446174" .
            "6153746f7265496e69745265717565737412380a0f737465704e616d6552" .
            "65717565737418162001280b321f2e67617567652e6d657373616765732e" .
            "537465704e616d6552657175657374123a0a10737465704e616d65526573" .
            "706f6e736518172001280b32202e67617567652e6d657373616765732e53" .
            "7465704e616d65526573706f6e736512380a0f7265666163746f72526571" .
            "7565737418182001280b321f2e67617567652e6d657373616765732e5265" .
            "666163746f7252657175657374123a0a107265666163746f72526573706f" .
            "6e736518192001280b32202e67617567652e6d657373616765732e526566" .
            "6163746f72526573706f6e7365124e0a1a756e737570706f727465644d65" .
            "7373616765526573706f6e7365181a2001280b322a2e67617567652e6d65" .
            "7373616765732e556e737570706f727465644d657373616765526573706f" .
            "6e736522dd040a0b4d6573736167655479706512150a1145786563757469" .
            "6f6e5374617274696e67100012190a1553706563457865637574696f6e53" .
            "74617274696e67100112170a1353706563457865637574696f6e456e6469" .
            "6e671002121d0a195363656e6172696f457865637574696f6e5374617274" .
            "696e671003121b0a175363656e6172696f457865637574696f6e456e6469" .
            "6e67100412190a1553746570457865637574696f6e5374617274696e6710" .
            "0512170a1353746570457865637574696f6e456e64696e671006120f0a0b" .
            "4578656375746553746570100712130a0f457865637574696f6e456e6469" .
            "6e67100812170a135374657056616c696461746552657175657374100912" .
            "180a145374657056616c6964617465526573706f6e7365100a121b0a1745" .
            "7865637574696f6e537461747573526573706f6e7365100b12140a105374" .
            "65704e616d657352657175657374100c12150a11537465704e616d657352" .
            "6573706f6e7365100d12160a124b696c6c50726f63657373526571756573" .
            "74100e12180a145375697465457865637574696f6e526573756c74100f12" .
            "190a155363656e6172696f4461746153746f7265496e6974101012150a11" .
            "537065634461746153746f7265496e6974101112160a1253756974654461" .
            "746153746f7265496e6974101212130a0f537465704e616d655265717565" .
            "7374101312140a10537465704e616d65526573706f6e7365101412130a0f" .
            "5265666163746f7252657175657374101512140a105265666163746f7252" .
            "6573706f6e73651016121e0a1a556e737570706f727465644d6573736167" .
            "65526573706f6e736510174211aa020e47617567652e4d65737361676573" .
            "620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
