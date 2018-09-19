<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CalculateActiveUser extends Command
{
    /**
     * 调用的命令
     * @var string
     */
    protected $signature = 'larabbs:calculate-active-user';

    /**
     * 命令的描述
     * @var string
     */
    protected $description = '生成活跃用户';


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 最终执行的方法
     * @param  User   $user user实例
     */
    public function handle(User $user)
    {
        // 在命令行打印一行消息
        $this->info("开始计算...");

        $user->calculateAndCacheActiveUsers();

        $this->info("成功生成！");
    }
}
