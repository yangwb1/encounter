<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * 当我们运行迁移时，up 方法会被调用
     * 在 up 方法里面，我们通过调用 Schema 类的 create 方法来创建 users 表：
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');//创建自增长id
            $table->string('name');
            $table->string('email')->unique();//创建email，并且唯一值
            $table->string('password',60);//最大长度60
            $table->rememberToken();//用于保存记住我
            $table->timestamps();//创建时间
        });
    }

    /**
     * 当我们回滚迁移时，down 方法会被调用。
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
