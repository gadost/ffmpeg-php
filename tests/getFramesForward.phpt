--TEST--
ffmpeg getFrames forward test
--SKIPIF--
<?php 
extension_loaded('ffmpeg') or die("skip ffmpeg extension not loaded"); 
extension_loaded('gd') or die("skip gd extension not avaliable.");
function_exists("imagecreatetruecolor") or die("skip function imagecreatetruecolor unavailable");
?>
--FILE--
<?php
$mov = new ffmpeg_movie(dirname(__FILE__) . '/test_media/robot.avi');

$framecount = $mov->getFrameCount();
for($i = 1; $i <= $framecount; $i++) {
    $img = sprintf("%s/test-%04d.png", dirname(__FILE__), $i);
    $frame = $mov->getFrame($i);
    $image = $frame->toGDImage();
    imagepng($image, $img);
    printf("ffmpeg getFramesForward($i): md5 = %s\n", md5(file_get_contents($img)));
    imagedestroy($image);
    unlink($img);
}
?>
--EXPECT--
ffmpeg getFramesForward(1): md5 = 693aa31b50a57aac4780af051799d9f8
ffmpeg getFramesForward(2): md5 = 693aa31b50a57aac4780af051799d9f8
ffmpeg getFramesForward(3): md5 = 693aa31b50a57aac4780af051799d9f8
ffmpeg getFramesForward(4): md5 = 46f5adce6b22e79e2683e76bd1f8b247
ffmpeg getFramesForward(5): md5 = 46f5adce6b22e79e2683e76bd1f8b247
ffmpeg getFramesForward(6): md5 = 46f5adce6b22e79e2683e76bd1f8b247
ffmpeg getFramesForward(7): md5 = 962ad04cfe5e96c2f0c1bd348369c9e5
ffmpeg getFramesForward(8): md5 = 962ad04cfe5e96c2f0c1bd348369c9e5
ffmpeg getFramesForward(9): md5 = 962ad04cfe5e96c2f0c1bd348369c9e5
ffmpeg getFramesForward(10): md5 = 80847ac09f73b1d6c6d0a4edc46b4aff
ffmpeg getFramesForward(11): md5 = 80847ac09f73b1d6c6d0a4edc46b4aff
ffmpeg getFramesForward(12): md5 = 80847ac09f73b1d6c6d0a4edc46b4aff
ffmpeg getFramesForward(13): md5 = 1a7f0815238b66aef51468fd492029d3
ffmpeg getFramesForward(14): md5 = 1a7f0815238b66aef51468fd492029d3
ffmpeg getFramesForward(15): md5 = 1a7f0815238b66aef51468fd492029d3
ffmpeg getFramesForward(16): md5 = 445b0d22b8f823e3c2de48c559bfaa12
ffmpeg getFramesForward(17): md5 = 445b0d22b8f823e3c2de48c559bfaa12
ffmpeg getFramesForward(18): md5 = 445b0d22b8f823e3c2de48c559bfaa12
ffmpeg getFramesForward(19): md5 = 5ade66c53654918ee20dd41143e29a15
ffmpeg getFramesForward(20): md5 = 5ade66c53654918ee20dd41143e29a15
ffmpeg getFramesForward(21): md5 = 5ade66c53654918ee20dd41143e29a15
ffmpeg getFramesForward(22): md5 = c0882e134e1e664f57974979dc35e31c
ffmpeg getFramesForward(23): md5 = c0882e134e1e664f57974979dc35e31c
ffmpeg getFramesForward(24): md5 = c0882e134e1e664f57974979dc35e31c
ffmpeg getFramesForward(25): md5 = 50777e945146885bdafd34ce5a3b4f4d
ffmpeg getFramesForward(26): md5 = 50777e945146885bdafd34ce5a3b4f4d
ffmpeg getFramesForward(27): md5 = 50777e945146885bdafd34ce5a3b4f4d
ffmpeg getFramesForward(28): md5 = 44653b1d6d363fac2b02c7a3b0a97526
ffmpeg getFramesForward(29): md5 = 44653b1d6d363fac2b02c7a3b0a97526
ffmpeg getFramesForward(30): md5 = 44653b1d6d363fac2b02c7a3b0a97526
ffmpeg getFramesForward(31): md5 = 2a7127004e1b7508f226f8061ed8f2d8
ffmpeg getFramesForward(32): md5 = 2a7127004e1b7508f226f8061ed8f2d8
ffmpeg getFramesForward(33): md5 = 2a7127004e1b7508f226f8061ed8f2d8
ffmpeg getFramesForward(34): md5 = 23d4de81c1f7aa17bd2a7ccd987fae7f
ffmpeg getFramesForward(35): md5 = 23d4de81c1f7aa17bd2a7ccd987fae7f
ffmpeg getFramesForward(36): md5 = 23d4de81c1f7aa17bd2a7ccd987fae7f
ffmpeg getFramesForward(37): md5 = 149870ca6f4a12b847353096b757c164
ffmpeg getFramesForward(38): md5 = 149870ca6f4a12b847353096b757c164
ffmpeg getFramesForward(39): md5 = 149870ca6f4a12b847353096b757c164
ffmpeg getFramesForward(40): md5 = e87d72bd40ea57bc00c4ef50a71f35ef
ffmpeg getFramesForward(41): md5 = e87d72bd40ea57bc00c4ef50a71f35ef
ffmpeg getFramesForward(42): md5 = e87d72bd40ea57bc00c4ef50a71f35ef
ffmpeg getFramesForward(43): md5 = d587512789736d66516ce303114422a9
ffmpeg getFramesForward(44): md5 = d587512789736d66516ce303114422a9
ffmpeg getFramesForward(45): md5 = d587512789736d66516ce303114422a9
ffmpeg getFramesForward(46): md5 = 4c863b95302db3cfa2233451bd2e73b6
ffmpeg getFramesForward(47): md5 = 4c863b95302db3cfa2233451bd2e73b6
ffmpeg getFramesForward(48): md5 = 4c863b95302db3cfa2233451bd2e73b6
ffmpeg getFramesForward(49): md5 = b8b29c18c40c509e2e41a8e4acecfe8f
ffmpeg getFramesForward(50): md5 = b8b29c18c40c509e2e41a8e4acecfe8f
ffmpeg getFramesForward(51): md5 = b8b29c18c40c509e2e41a8e4acecfe8f
ffmpeg getFramesForward(52): md5 = 9bfd5d1cfeecb659a215e7f3d4e5de02
ffmpeg getFramesForward(53): md5 = 9bfd5d1cfeecb659a215e7f3d4e5de02
ffmpeg getFramesForward(54): md5 = 9bfd5d1cfeecb659a215e7f3d4e5de02
ffmpeg getFramesForward(55): md5 = 02eb1aac0e9d4d3c81416e191a20d257
ffmpeg getFramesForward(56): md5 = 02eb1aac0e9d4d3c81416e191a20d257
ffmpeg getFramesForward(57): md5 = 02eb1aac0e9d4d3c81416e191a20d257
ffmpeg getFramesForward(58): md5 = 48caff6d37b2b14e6ad210bcfafa16ab
ffmpeg getFramesForward(59): md5 = 48caff6d37b2b14e6ad210bcfafa16ab
ffmpeg getFramesForward(60): md5 = 48caff6d37b2b14e6ad210bcfafa16ab
ffmpeg getFramesForward(61): md5 = 038a9ed388dc0d91bda47ea0465dc30f
ffmpeg getFramesForward(62): md5 = 038a9ed388dc0d91bda47ea0465dc30f
ffmpeg getFramesForward(63): md5 = 038a9ed388dc0d91bda47ea0465dc30f
ffmpeg getFramesForward(64): md5 = ce0fc3dec90418318499cebc9b941ba9
ffmpeg getFramesForward(65): md5 = ce0fc3dec90418318499cebc9b941ba9
ffmpeg getFramesForward(66): md5 = ce0fc3dec90418318499cebc9b941ba9
ffmpeg getFramesForward(67): md5 = 61b587178a423dcda2bf799e03de1484
ffmpeg getFramesForward(68): md5 = 61b587178a423dcda2bf799e03de1484
ffmpeg getFramesForward(69): md5 = 61b587178a423dcda2bf799e03de1484
ffmpeg getFramesForward(70): md5 = c9aa54c0791a759696f008cc3c968e24
ffmpeg getFramesForward(71): md5 = c9aa54c0791a759696f008cc3c968e24
ffmpeg getFramesForward(72): md5 = c9aa54c0791a759696f008cc3c968e24
ffmpeg getFramesForward(73): md5 = 0fa5666b36d14e22c2d685a2f4b6e85e
ffmpeg getFramesForward(74): md5 = 0fa5666b36d14e22c2d685a2f4b6e85e
ffmpeg getFramesForward(75): md5 = 0fa5666b36d14e22c2d685a2f4b6e85e
ffmpeg getFramesForward(76): md5 = dffcd10146ba07e7b9411be5a92c5ab1
ffmpeg getFramesForward(77): md5 = dffcd10146ba07e7b9411be5a92c5ab1
ffmpeg getFramesForward(78): md5 = dffcd10146ba07e7b9411be5a92c5ab1
ffmpeg getFramesForward(79): md5 = ea3c7e80a76ec87227e1cb010b433a8b
ffmpeg getFramesForward(80): md5 = ea3c7e80a76ec87227e1cb010b433a8b
ffmpeg getFramesForward(81): md5 = ea3c7e80a76ec87227e1cb010b433a8b
ffmpeg getFramesForward(82): md5 = db6501ae0cf6e7cc3c3080333b710fc6
ffmpeg getFramesForward(83): md5 = db6501ae0cf6e7cc3c3080333b710fc6
ffmpeg getFramesForward(84): md5 = db6501ae0cf6e7cc3c3080333b710fc6
ffmpeg getFramesForward(85): md5 = df9b4592ff49efab623aface0764a4c2
ffmpeg getFramesForward(86): md5 = df9b4592ff49efab623aface0764a4c2
ffmpeg getFramesForward(87): md5 = df9b4592ff49efab623aface0764a4c2
ffmpeg getFramesForward(88): md5 = f1d135a68a5fd11bafa562a32833df34
ffmpeg getFramesForward(89): md5 = f1d135a68a5fd11bafa562a32833df34
ffmpeg getFramesForward(90): md5 = f1d135a68a5fd11bafa562a32833df34
ffmpeg getFramesForward(91): md5 = 68888902a3d8a13b8efe3e070809f54e
ffmpeg getFramesForward(92): md5 = 68888902a3d8a13b8efe3e070809f54e
ffmpeg getFramesForward(93): md5 = 68888902a3d8a13b8efe3e070809f54e
ffmpeg getFramesForward(94): md5 = b7b6e8e39d88630746b2d67fad071516
ffmpeg getFramesForward(95): md5 = b7b6e8e39d88630746b2d67fad071516
ffmpeg getFramesForward(96): md5 = b7b6e8e39d88630746b2d67fad071516
ffmpeg getFramesForward(97): md5 = 8f86f86cd2a39e33938eb9a726c7820c
ffmpeg getFramesForward(98): md5 = 8f86f86cd2a39e33938eb9a726c7820c
ffmpeg getFramesForward(99): md5 = 8f86f86cd2a39e33938eb9a726c7820c
ffmpeg getFramesForward(100): md5 = 7ece3c2a510e5e0447d4a40ac7719e6d
ffmpeg getFramesForward(101): md5 = 7ece3c2a510e5e0447d4a40ac7719e6d
ffmpeg getFramesForward(102): md5 = 7ece3c2a510e5e0447d4a40ac7719e6d
ffmpeg getFramesForward(103): md5 = 84e40366d9075b2390132eefb5d977f4
ffmpeg getFramesForward(104): md5 = 84e40366d9075b2390132eefb5d977f4
ffmpeg getFramesForward(105): md5 = 84e40366d9075b2390132eefb5d977f4
ffmpeg getFramesForward(106): md5 = 649b4d326c90454a062f7ac7ae6fed18
ffmpeg getFramesForward(107): md5 = 649b4d326c90454a062f7ac7ae6fed18
ffmpeg getFramesForward(108): md5 = 649b4d326c90454a062f7ac7ae6fed18
ffmpeg getFramesForward(109): md5 = 4352d4fa27f4be91ab4b9bbefbff0e61
ffmpeg getFramesForward(110): md5 = 4352d4fa27f4be91ab4b9bbefbff0e61
ffmpeg getFramesForward(111): md5 = 4352d4fa27f4be91ab4b9bbefbff0e61
ffmpeg getFramesForward(112): md5 = 1e03742868e2f4cecb0a549a33a2d910
ffmpeg getFramesForward(113): md5 = 1e03742868e2f4cecb0a549a33a2d910
ffmpeg getFramesForward(114): md5 = 1e03742868e2f4cecb0a549a33a2d910
ffmpeg getFramesForward(115): md5 = fddf364fef227491aec27335cacbf16b
ffmpeg getFramesForward(116): md5 = fddf364fef227491aec27335cacbf16b
ffmpeg getFramesForward(117): md5 = fddf364fef227491aec27335cacbf16b
ffmpeg getFramesForward(118): md5 = a6a6dc77c91df625209a1fa1938518b3
ffmpeg getFramesForward(119): md5 = a6a6dc77c91df625209a1fa1938518b3
ffmpeg getFramesForward(120): md5 = a6a6dc77c91df625209a1fa1938518b3
ffmpeg getFramesForward(121): md5 = 1ff5678204c04832e938dbcecd9d6b3b
ffmpeg getFramesForward(122): md5 = 1ff5678204c04832e938dbcecd9d6b3b
ffmpeg getFramesForward(123): md5 = 1ff5678204c04832e938dbcecd9d6b3b
ffmpeg getFramesForward(124): md5 = 0f25e44c066a254c2e03ce62491eb436
ffmpeg getFramesForward(125): md5 = 0f25e44c066a254c2e03ce62491eb436
ffmpeg getFramesForward(126): md5 = 0f25e44c066a254c2e03ce62491eb436
ffmpeg getFramesForward(127): md5 = 96ef5c0f473fb42ccafb025e72ac21e2
ffmpeg getFramesForward(128): md5 = 96ef5c0f473fb42ccafb025e72ac21e2
ffmpeg getFramesForward(129): md5 = 96ef5c0f473fb42ccafb025e72ac21e2
ffmpeg getFramesForward(130): md5 = 884d3ead6edadfe270bde7f4d892c4e7
ffmpeg getFramesForward(131): md5 = 884d3ead6edadfe270bde7f4d892c4e7
ffmpeg getFramesForward(132): md5 = 884d3ead6edadfe270bde7f4d892c4e7
ffmpeg getFramesForward(133): md5 = fcfd42f03b43c758f5809ddb6f838e35
ffmpeg getFramesForward(134): md5 = fcfd42f03b43c758f5809ddb6f838e35
ffmpeg getFramesForward(135): md5 = fcfd42f03b43c758f5809ddb6f838e35
ffmpeg getFramesForward(136): md5 = 13207b57813c674964b90710d20015a7
ffmpeg getFramesForward(137): md5 = 13207b57813c674964b90710d20015a7
ffmpeg getFramesForward(138): md5 = 13207b57813c674964b90710d20015a7
ffmpeg getFramesForward(139): md5 = 8ad6920211bc42e3c5d60aac49269ab6
ffmpeg getFramesForward(140): md5 = 8ad6920211bc42e3c5d60aac49269ab6
ffmpeg getFramesForward(141): md5 = 8ad6920211bc42e3c5d60aac49269ab6
ffmpeg getFramesForward(142): md5 = 5cf78bf4a1e2d315cfaa727a01b9e76b
ffmpeg getFramesForward(143): md5 = 5cf78bf4a1e2d315cfaa727a01b9e76b
ffmpeg getFramesForward(144): md5 = 5cf78bf4a1e2d315cfaa727a01b9e76b
ffmpeg getFramesForward(145): md5 = f8edd77736d0ee5fa659e48c5fbd08e5
ffmpeg getFramesForward(146): md5 = f8edd77736d0ee5fa659e48c5fbd08e5
ffmpeg getFramesForward(147): md5 = f8edd77736d0ee5fa659e48c5fbd08e5
ffmpeg getFramesForward(148): md5 = 8a9edebd11a1c00a4d7f70d86214e3f0
ffmpeg getFramesForward(149): md5 = 8a9edebd11a1c00a4d7f70d86214e3f0
ffmpeg getFramesForward(150): md5 = 8a9edebd11a1c00a4d7f70d86214e3f0
ffmpeg getFramesForward(151): md5 = e0eb7b58ca5ebdedcd68207c952cbdf3
ffmpeg getFramesForward(152): md5 = e0eb7b58ca5ebdedcd68207c952cbdf3
ffmpeg getFramesForward(153): md5 = e0eb7b58ca5ebdedcd68207c952cbdf3
ffmpeg getFramesForward(154): md5 = 1e0c149d1c96ad596f0b2a308ec5673c
ffmpeg getFramesForward(155): md5 = 1e0c149d1c96ad596f0b2a308ec5673c
ffmpeg getFramesForward(156): md5 = 1e0c149d1c96ad596f0b2a308ec5673c
ffmpeg getFramesForward(157): md5 = 16c737c2d00c6d37292c3afe3515bf56
ffmpeg getFramesForward(158): md5 = 16c737c2d00c6d37292c3afe3515bf56
ffmpeg getFramesForward(159): md5 = 16c737c2d00c6d37292c3afe3515bf56
ffmpeg getFramesForward(160): md5 = f4a0d9cf31ad0cad81e1deaceb47a756
ffmpeg getFramesForward(161): md5 = f4a0d9cf31ad0cad81e1deaceb47a756
ffmpeg getFramesForward(162): md5 = f4a0d9cf31ad0cad81e1deaceb47a756
ffmpeg getFramesForward(163): md5 = ee1eeb86a69a2e4210033aebcf39bca2
ffmpeg getFramesForward(164): md5 = ee1eeb86a69a2e4210033aebcf39bca2
ffmpeg getFramesForward(165): md5 = ee1eeb86a69a2e4210033aebcf39bca2
ffmpeg getFramesForward(166): md5 = a40db68641c4ad76ac5368dcd247eb4a
ffmpeg getFramesForward(167): md5 = a40db68641c4ad76ac5368dcd247eb4a
ffmpeg getFramesForward(168): md5 = a40db68641c4ad76ac5368dcd247eb4a
ffmpeg getFramesForward(169): md5 = 18ff30e3c231f1967aa44fe2f9f5285c
ffmpeg getFramesForward(170): md5 = 18ff30e3c231f1967aa44fe2f9f5285c
ffmpeg getFramesForward(171): md5 = 18ff30e3c231f1967aa44fe2f9f5285c
ffmpeg getFramesForward(172): md5 = 48229edb0a5fda484c7482265b078009
ffmpeg getFramesForward(173): md5 = 48229edb0a5fda484c7482265b078009
ffmpeg getFramesForward(174): md5 = 48229edb0a5fda484c7482265b078009
ffmpeg getFramesForward(175): md5 = 1c61d3ca67f7202adb31bf6089fbff2e
ffmpeg getFramesForward(176): md5 = 1c61d3ca67f7202adb31bf6089fbff2e
ffmpeg getFramesForward(177): md5 = 1c61d3ca67f7202adb31bf6089fbff2e
ffmpeg getFramesForward(178): md5 = e16c4d5c8b22f8b864a16891b3bd14e7
ffmpeg getFramesForward(179): md5 = e16c4d5c8b22f8b864a16891b3bd14e7
ffmpeg getFramesForward(180): md5 = e16c4d5c8b22f8b864a16891b3bd14e7
ffmpeg getFramesForward(181): md5 = 21af6e0bd1f8011808c6890d394396e1
ffmpeg getFramesForward(182): md5 = 21af6e0bd1f8011808c6890d394396e1
ffmpeg getFramesForward(183): md5 = 21af6e0bd1f8011808c6890d394396e1
ffmpeg getFramesForward(184): md5 = c414947d7b620ee44267b4f182d89ec8
ffmpeg getFramesForward(185): md5 = c414947d7b620ee44267b4f182d89ec8
ffmpeg getFramesForward(186): md5 = c414947d7b620ee44267b4f182d89ec8
ffmpeg getFramesForward(187): md5 = f9ea01aef8b5bf246c74e3bab2439ebf
ffmpeg getFramesForward(188): md5 = f9ea01aef8b5bf246c74e3bab2439ebf
ffmpeg getFramesForward(189): md5 = f9ea01aef8b5bf246c74e3bab2439ebf
ffmpeg getFramesForward(190): md5 = 365b1cadbf6bda704d4f7b0f7f904785
ffmpeg getFramesForward(191): md5 = 365b1cadbf6bda704d4f7b0f7f904785
ffmpeg getFramesForward(192): md5 = 365b1cadbf6bda704d4f7b0f7f904785
ffmpeg getFramesForward(193): md5 = d5cd91272f4712fb2944fbd2e4552c45
ffmpeg getFramesForward(194): md5 = d5cd91272f4712fb2944fbd2e4552c45
ffmpeg getFramesForward(195): md5 = d5cd91272f4712fb2944fbd2e4552c45
ffmpeg getFramesForward(196): md5 = 8dea42da4ce7c3083d949b0f974399e3
ffmpeg getFramesForward(197): md5 = 8dea42da4ce7c3083d949b0f974399e3
ffmpeg getFramesForward(198): md5 = 8dea42da4ce7c3083d949b0f974399e3
ffmpeg getFramesForward(199): md5 = 18dd6bade0c7f812d0cba2de1f413175
ffmpeg getFramesForward(200): md5 = 18dd6bade0c7f812d0cba2de1f413175
ffmpeg getFramesForward(201): md5 = 18dd6bade0c7f812d0cba2de1f413175
ffmpeg getFramesForward(202): md5 = 490e9a5423e458d82f7cfae8064492b7
ffmpeg getFramesForward(203): md5 = 490e9a5423e458d82f7cfae8064492b7
ffmpeg getFramesForward(204): md5 = 490e9a5423e458d82f7cfae8064492b7
ffmpeg getFramesForward(205): md5 = 7ddc765161e0c22514b5c0828e1362f3
ffmpeg getFramesForward(206): md5 = 7ddc765161e0c22514b5c0828e1362f3
ffmpeg getFramesForward(207): md5 = 7ddc765161e0c22514b5c0828e1362f3
ffmpeg getFramesForward(208): md5 = aef1e2cc24a18bf1515cef5bb189aeb3
ffmpeg getFramesForward(209): md5 = aef1e2cc24a18bf1515cef5bb189aeb3
ffmpeg getFramesForward(210): md5 = aef1e2cc24a18bf1515cef5bb189aeb3
ffmpeg getFramesForward(211): md5 = 4db82d394a2311522fdb8b15f448827a
ffmpeg getFramesForward(212): md5 = 4db82d394a2311522fdb8b15f448827a
ffmpeg getFramesForward(213): md5 = 4db82d394a2311522fdb8b15f448827a
ffmpeg getFramesForward(214): md5 = 9acee9aeb40524d051674ac6b30e1c8b
ffmpeg getFramesForward(215): md5 = 9acee9aeb40524d051674ac6b30e1c8b
ffmpeg getFramesForward(216): md5 = 9acee9aeb40524d051674ac6b30e1c8b
ffmpeg getFramesForward(217): md5 = f5976f8cd67073146ef6ef8d001c6e34
ffmpeg getFramesForward(218): md5 = f5976f8cd67073146ef6ef8d001c6e34
ffmpeg getFramesForward(219): md5 = f5976f8cd67073146ef6ef8d001c6e34
ffmpeg getFramesForward(220): md5 = 910a63ec4bd4e2f73e723ae237ccb5ee
ffmpeg getFramesForward(221): md5 = 910a63ec4bd4e2f73e723ae237ccb5ee
ffmpeg getFramesForward(222): md5 = 910a63ec4bd4e2f73e723ae237ccb5ee
ffmpeg getFramesForward(223): md5 = 7eeda0f3c9f4b21917ca0ffb10192941
ffmpeg getFramesForward(224): md5 = 7eeda0f3c9f4b21917ca0ffb10192941
ffmpeg getFramesForward(225): md5 = 7eeda0f3c9f4b21917ca0ffb10192941
ffmpeg getFramesForward(226): md5 = 4999a95e6866d811ab2d909c97446183
ffmpeg getFramesForward(227): md5 = 4999a95e6866d811ab2d909c97446183
ffmpeg getFramesForward(228): md5 = 4999a95e6866d811ab2d909c97446183
ffmpeg getFramesForward(229): md5 = 46d48ec5a5430631e08549af827f641d
ffmpeg getFramesForward(230): md5 = 46d48ec5a5430631e08549af827f641d
ffmpeg getFramesForward(231): md5 = 46d48ec5a5430631e08549af827f641d
ffmpeg getFramesForward(232): md5 = b413f14785c34a33e376dca390919e44
ffmpeg getFramesForward(233): md5 = b413f14785c34a33e376dca390919e44
ffmpeg getFramesForward(234): md5 = b413f14785c34a33e376dca390919e44
ffmpeg getFramesForward(235): md5 = d61dfde9607fae63d95f851caf11c3ca
ffmpeg getFramesForward(236): md5 = d61dfde9607fae63d95f851caf11c3ca
ffmpeg getFramesForward(237): md5 = d61dfde9607fae63d95f851caf11c3ca
ffmpeg getFramesForward(238): md5 = d4a2f7c2ab68650389c59908d4c0782d
ffmpeg getFramesForward(239): md5 = d4a2f7c2ab68650389c59908d4c0782d
ffmpeg getFramesForward(240): md5 = d4a2f7c2ab68650389c59908d4c0782d
