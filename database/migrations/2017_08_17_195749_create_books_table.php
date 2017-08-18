<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->text('description');
            $table->date('published')->format(\Carbon\Carbon::createFromDate());
            $table->string('cover')->nullable();
            $table->timestamps();
        });

        DB::table('books')->insert([
            'id' => '1',
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'author' => 'J.K Rowling',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Vestibulum fringilla euismod purus tincidunt egestas. Etiam dapibus mi tortor, 
            dictum pellentesque diam venenatis id. Maecenas at massa at lacus ultrices auctor 
            id vitae risus. Donec congue est id diam interdum, id maximus tellus interdum. Vestibulum
            blandit convallis lobortis. Curabitur sed commodo sem, sed mattis est. Aliquam tincidunt, 
            tortor sed ornare fermentum, tellus ante mollis quam, a dapibus diam tellus volutpat nulla. 
            Sed malesuada lacinia odio ac consectetur. In in tristique ipsum, tincidunt fermentum magna.
            Sed tristique sapien nulla, quis facilisis est mollis nec. Pellentesque habitant morbi 
            tristique senectus et netus et malesuada fames ac turpis egestas. Duis tempor iaculis 
            ligula, vitae accumsan magna venenatis vitae. Quisque massa elit, malesuada non risus vel,
            porta dignissim orci. Praesent ornare tellus erat, sed vehicula arcu dignissim nec. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Donec auctor Duis tempor iaculis ligula, vitae accumsan magna venenatis vitae. 
            Quisque massa elit, malesuada non risus vel, porta dignissim orci. Praesent ornare tellus erat, sed vehicula 
            arcu dignissim nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut vulputate libero, 
            mattis faucibus orci. Fusce sit amet mauris id ex bibendum rhoncus. Curabitur lobortis ultrices libero sed 
            gravida. Ut aliquam ultricies consequat. Pellentesque placerat, magna ac hendrerit condimentum, leo justo 
            egestas libero, sed placerat lorem lectus non felis. Quisque facilisis sapien quam, eu gravida leo eleifend 
            vitae. Vivamus ornare odio vel purus facilisis imperdiet. Proin risus mauris, lacinia at imperdiet venenatis
            placerat nec tortor Aliquam nec orci fermentum urna accumsan fringilla sed aliquet tortor.',
            'published' => \Carbon\Carbon::createFromDate(1997,6,26),
            'created_at' => \Carbon\Carbon::now()
        ]);

        DB::table('books')->insert([
            'id' => '2',
            'title' => 'The Cat And The Hat',
            'author' => 'Dr. Suess',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Vestibulum fringilla euismod purus tincidunt egestas. Etiam dapibus mi tortor, 
            dictum pellentesque diam venenatis id. Maecenas at massa at lacus ultrices auctor 
            id vitae risus. Donec congue est id diam interdum, id maximus tellus interdum. Vestibulum
            blandit convallis lobortis. Curabitur sed commodo sem, sed mattis est. Aliquam tincidunt, 
            tortor sed ornare fermentum, tellus ante mollis quam, a dapibus diam tellus volutpat nulla. 
            Sed malesuada lacinia odio ac consectetur. In in tristique ipsum, tincidunt fermentum magna.
            Sed tristique sapien nulla, quis facilisis est mollis nec. Pellentesque habitant morbi 
            tristique senectus et netus et malesuada fames ac turpis egestas. Duis tempor iaculis 
            ligula, vitae accumsan magna venenatis vitae. Quisque massa elit, malesuada non risus vel,
            porta dignissim orci. Praesent ornare tellus erat, sed vehicula arcu dignissim nec. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Donec auctor Duis tempor iaculis ligula, vitae accumsan magna venenatis vitae. 
            Quisque massa elit, malesuada non risus vel, porta dignissim orci. Praesent ornare tellus erat, sed vehicula 
            arcu dignissim nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut vulputate libero, 
            mattis faucibus orci. Fusce sit amet mauris id ex bibendum rhoncus. Curabitur lobortis ultrices libero sed 
            gravida. Ut aliquam ultricies consequat. Pellentesque placerat, magna ac hendrerit condimentum, leo justo 
            egestas libero, sed placerat lorem lectus non felis. Quisque facilisis sapien quam, eu gravida leo eleifend 
            vitae. Vivamus ornare odio vel purus facilisis imperdiet. Proin risus mauris, lacinia at imperdiet venenatis
            placerat nec tortor Aliquam nec orci fermentum urna accumsan fringilla sed aliquet tortor.',
            'published' => \Carbon\Carbon::createFromDate(1957,3,12),
            'created_at' => \Carbon\Carbon::now()
        ]);

        DB::table('books')->insert([
            'id' => '3',
            'title' => 'Day By Day Armageddon',
            'author' => 'J.L. Bourne',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Vestibulum fringilla euismod purus tincidunt egestas. Etiam dapibus mi tortor, 
            dictum pellentesque diam venenatis id. Maecenas at massa at lacus ultrices auctor 
            id vitae risus. Donec congue est id diam interdum, id maximus tellus interdum. Vestibulum
            blandit convallis lobortis. Curabitur sed commodo sem, sed mattis est. Aliquam tincidunt, 
            tortor sed ornare fermentum, tellus ante mollis quam, a dapibus diam tellus volutpat nulla. 
            Sed malesuada lacinia odio ac consectetur. In in tristique ipsum, tincidunt fermentum magna.
            Sed tristique sapien nulla, quis facilisis est mollis nec. Pellentesque habitant morbi 
            tristique senectus et netus et malesuada fames ac turpis egestas. Duis tempor iaculis 
            ligula, vitae accumsan magna venenatis vitae. Quisque massa elit, malesuada non risus vel,
            porta dignissim orci. Praesent ornare tellus erat, sed vehicula arcu dignissim nec. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Donec auctor Duis tempor iaculis ligula, vitae accumsan magna venenatis vitae. 
            Quisque massa elit, malesuada non risus vel, porta dignissim orci. Praesent ornare tellus erat, sed vehicula 
            arcu dignissim nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut vulputate libero, 
            mattis faucibus orci. Fusce sit amet mauris id ex bibendum rhoncus. Curabitur lobortis ultrices libero sed 
            gravida. Ut aliquam ultricies consequat. Pellentesque placerat, magna ac hendrerit condimentum, leo justo 
            egestas libero, sed placerat lorem lectus non felis. Quisque facilisis sapien quam, eu gravida leo eleifend 
            vitae. Vivamus ornare odio vel purus facilisis imperdiet. Proin risus mauris, lacinia at imperdiet venenatis
            placerat nec tortor Aliquam nec orci fermentum urna accumsan fringilla sed aliquet tortor.',
            'published' => \Carbon\Carbon::createFromDate(2004,6,1),
            'created_at' => \Carbon\Carbon::now()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
