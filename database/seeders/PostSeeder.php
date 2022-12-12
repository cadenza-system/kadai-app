<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => '2',
            'content' => '完璧を目指すよりもとにかくやってしまうことだ',
        ]);
        Post::create([
            'user_id' => '2',
            'content' => '「ジョーのデバッグの法則」というのがあります。それは、すべてのバグは最後にプログラムを修正した個所からプラスマイナス3ステートメント以内にある、というものです',
        ]);
        Post::create([
            'user_id' => '2',
            'content' => 'もしそれがよい考えなら、思い切ってそれをしなさい。許可をもらうよりも、謝るほうが簡単だから',
        ]);
        Post::create([
            'user_id' => '2',
            'content' => 'コンピュータはとても高速にとても正確な間違いをおかす。',
        ]);
        Post::create([
            'user_id' => '2',
            'content' => '私のソフトウェアにはバグが無い。その場に応じてランダムな仕様が生み出されるだけだ。',
        ]);
        Post::create([
            'user_id' => '2',
            'content' => '実際、悪いプログラマーと良いプログラマーの違いは、自分のコードとデータ構造のどちらをより重要と考えるかということだと主張します。 悪いプログラマーはコードを心配します。 優れたプログラマーは、データ構造とその関係について心配しています。',
        ]);
        Post::create([
            'user_id' => '2',
            'content' => '新しいプログラミング言語を学ぶ唯一の方法は、その言語でプログラムを書くことです。',
        ]);
        Post::create([
            'user_id' => '2',
            'content' => 'たぶん動くと思うからリリースしようぜ',
        ]);
        Post::create([
            'user_id' => '2',
            'content' => 'シンプルであることを保て。',
        ]);
        Post::create([
            'user_id' => '2',
            'content' => 'あなたたちの多くはプログラマの美徳をよく知っている。
            もちろんこの三つ、怠惰、短気、傲慢。',
        ]);
        Post::create([
            'user_id' => '3',
            'content' => '重要だと思えることならば、成功する確率が低くてもそれをやるべきである',
        ]);
        Post::create([
            'user_id' => '3',
            'content' => '変化は恐れずに受け入れなければならない',
        ]);
        Post::create([
            'user_id' => '3',
            'content' => 'アイデアを実行することはアイデアを思い付くより難しい',
        ]);
        Post::create([
            'user_id' => '3',
            'content' => '新しい舞台に立つことを恐れるな',
        ]);
        Post::create([
            'user_id' => '3',
            'content' => '会社を作ることは、ケーキを焼くようなもの。全ての材料を正しい割合で入れなければならない',
        ]);
        Post::create([
            'user_id' => '3',
            'content' => '一緒に働いている人を好きかどうかはとても大切だ',
        ]);
        Post::create([
            'user_id' => '3',
            'content' => '耳の痛い意見を聞くことは大事。とくに友人がそのようなことを言ったら、耳を傾けるべき',
        ]);
        Post::create([
            'user_id' => '3',
            'content' => '彼は解雇されました',
        ]);
        Post::create([
            'user_id' => '3',
            'content' => 'これまで週80時間働いていたのを、120時間働くだけだ',
        ]);
        Post::create([
            'user_id' => '3',
            'content' => '最後には太陽が拡張して地球上の全生物を破壊する',
        ]);
    }
}
