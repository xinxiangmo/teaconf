<?php

class TopicController extends Controller
{
    /**
     * List topic
     *
     * uri: /topics
     * method: GET
     */
	public function actionList()
	{
        $dataProvider = new CActiveDataProvider(Topic::model()->popular(), array(
            'criteria' => array(),
        ));

        $this->response($dataProvider->data);
    }

    /**
     * Create topic
     *
     * uri: /topics
     * method: POST
     */
    public function actionCreate($nodeId, $title, $content)
    {
        $topic = new Topic();
        $topic->setAttributes(array(
            'node_id' => $nodeId,
            'title' => $title,
            'content' => $content,
            'creator_id' => 1,  // FIXME creator_id not in model
            'created_by' => 'likai',
        ));

        if($topic->save())
            $this->response($topic, Response::CREATED);
        $this->response(array_shift($topic->getErrors()), Response::BAD_REQUEST);
    }

    /**
     * Update topic
     *
     * uri: /topic/{id}
     * method: PUT
     */
    public function actionUpdate($id, $title, $content)
    {
        $topic = Topic::model()->findByPk($id);
        if($topic) {
            $topic->title = $title;
            $topic->content = $content;
            if($topic->save())
                $this->response($topic, Response::UPDATED);
            $this->response(array_shift($topic->getErrors()), Response::BAD_REQUEST);
        }
        $this->response('Not found topic', Response::BAD_REQUEST);
    }

    /**
     * Read topic
     *
     * uri: /topic/{id}
     * method: GET
     */
    public function actionRead($id)
    {
        $topic = Topic::model()->findByPk($id);
        if($topic === null)
            $this->response('Not found topic', Response::NOT_FOUND);
        $this->response($topic);
    }

    /**
     * Delete topic
     *
     * uri: /topic/{id}
     * method: DELETE
     */
    public function actionDelete($id)
    {
        if(Topic::model()->deleteByPk($id))
        {
            $this->response('Deleted', Response::DELETED);
        }
        $this->response('Not found topic', Response::NOT_FOUND);
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
