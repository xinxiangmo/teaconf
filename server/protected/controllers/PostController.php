<?php

class PostController extends Controller
{
    private $_listOrder = array(
        'default' => 'id DESC',
    );

	public function actionList($id, $order = 'default', $page = 1)
	{
        $dataProvider = new CActiveDataProvider(Post::model(), array(
            'criteria' => array(),
            'sort' => array(
                'defaultOrder' => isset($this->_listOrder[$order]) ? $this->_listOrder[$order] : $this->_listOrder['default'],
            ),
            'pagination' => array(
                'currentPage' => $page,
                'pageSize' => 10,
            ),
        ));

        $this->response($dataProvider->data);
    }

    public function actionCreate($topicId, $content)
    {
        if(Topic::model()->findByPk($topicId) === null)
            $this->response('Not found topic', Response::BAD_REQUEST);

        $post = new Post();
        $post->content = $content;
        $post->topic_id = $topicId;
        $post->creator_id = 1;
        $post->created_at = time();
        $post->created_by = 'likai';

        if($post->save())
            $this->response($post, Response::CREATED);
        $this->response(array_shift($post->getErrors()), Response::BAD_REQUEST);
    }

    public function actionUpdate($id, $content)
    {
        $post = Post::model()->findByPk($id);
        if($post) {
            $post->content = $content;
            if($post->save())
                $this->response($post, Response::UPDATED);
            $this->response(array_shift($post->getErrors()), Response::BAD_REQUEST);
        }
        $this->response('Not found post', Response::BAD_REQUEST);
    }

    public function actionRead($id)
    {
        $post = Post::model()->findByPk($id);
        if($post === null)
            $this->response('Not found post', Response::NOT_FOUND);
        $this->response($post);
    }

    public function actionDelete($id)
    {
        if(Post::model()->deleteByPk($id))
        {
            $this->response('Deleted', Response::DELETED);
        }
        $this->response('Not found post', Response::NOT_FOUND);
    }

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
