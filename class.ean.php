<?php
class EAN
{
    private $elementA = [
        0 => "___XX_X",
        1  =>"__XX__X",
        2 => "__X__XX",
        3 => "_XXXX_X ",
        4 => "_X_XXXX ",
        5 => "_XX___X ",
        6 => "_X_XXXX ",
        7 => "_XXX_XX ",
        8 => "_XX_XXX ",
        9 => "___X_XX ",
    ];

    private $elementB = [
        0 => "_X__XXX" ,
        1 => "_XX__XX" ,
        2 => "__XX_XX" ,
        3 => "_X____X" ,
        4 => "__XXX_X" ,
        5 => "_XXX__X" ,
        6 => "____X_X" ,
        7 => "__X___X" ,
        8 => "___X__X" ,
        9 => "__X_XXX" ,
];

    private $elementC = [
        0 => "XXX_X_",
        1 => "XX__XX_",
        2 => "XX_XX__",
        3 => "X___X_",
        4 => "X_XXX__",
        5 => "X__XXX_",
        6 => "X_X____",
        7 => "X___X__",
        8 => "X__X____",
        9 => "XXX_X__",
    ];

    private SgardeNormale =" X_X ";
    private $gardeCentrale = "_X_X_" ;
}


?>