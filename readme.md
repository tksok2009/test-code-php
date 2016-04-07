#test code for php

	phpのテストコード、およびbitbucketの利用の方法を模索する

	課題へのアプローチの仕方。　

	課題を閉じる場合 fixesじゃないと　駄目？


	-----------------------------------------------------------------------------------
	ブランチでdocumenterを作成してみる

		1
		ローカル、追跡、リモート　それぞれのブランチの違いについて
		https://www.kaeruspoon.net/articles/1078

			step 1 ローカル、リモート共にブランチを切る

						local -> branch documenter

			step 2 local ->> git checkout documeter

			step 3 いつもどおり commit までして

				git push -u origin documenter　でプッシュ


			※課題への関連づけ失敗したので確認
			https://confluence.atlassian.co.jp/pages/viewpage.action?pageId=25133102

			課題番号を後半に打てという　お話ですな。

				***コメントして**　ref #3

				間違えた #3だったわ。
				

		2 プルリクする


		3 マージする


		4 マージ後の処理

			git checkout masterして
			git pullでリモートと同期するが

				[ ] このままdocumenterをクローズいなければコンフリクトしてくる？
					-> 同ファイルを編集して、masterでも編集すればコンフリクトしますね。


		5 マージ後にmasterで変更プッシュして、documenterにブランチを変えてみると・・・

			当たり前だが、git checkout documenterをすると、この文章自体がmaterで変更する前のものに
			戻りますね。

			これうまいこと　こまめにブランチ切るか、課題との組み合わせで段階わけするかとか
				[ ] もしくはタグを利用するか？

	-----------------------------------------------------------------------------------

	タグ付けを利用する。

	あとで戻したりするにも便利みたいですね。

	git add .
	git commit -m "****"
	git tag **tagname*
	git push -u orgin master

	リモートに反映されてない。
	http://qiita.com/runamoon@github/items/711c8fc7bfbf7e2ce3cf

	git push origin --tags
	これですべてのタグをリモートに反映


	




	-----------------------------------------------------------------------------------

	commit時の課題へのひも付けのメリット

		プルリクしたコメントが蓄積して本文に入る。
		
		












		

















