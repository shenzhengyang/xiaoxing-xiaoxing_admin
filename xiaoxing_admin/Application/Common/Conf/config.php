<?php
return array(
    /* 自动运行配置 */
    'CRON_CONFIG_ON' => true, // 是否开启自动运行
    'CRON_CONFIG' => array(
        '测试执行定时任务' => array('Home/Cron/crons', '5', ''), //路径(格式同R)、间隔秒（0为一直运行）、指定一个开始时间
    ),
);