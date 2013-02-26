<?php

class NodeController extends Controller
{
    private $_listOrder = array(
        'default' => 'id DESC',
    );

	public function actionList($order = 'default', $page = 1)
	{
        $dataProvider = new CActiveDataProvider(Node::model(), array(
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

        $node = new Node();
        $node->content = $content;
        $node->topic_id = $topicId;
        $node->creator_id = 1;
        $node->created_at = time();
        $node->created_by = 'likai';

        if($node->save())
            $this->response($node, Response::CREATED);
        $this->response(array_shift($node->getErrors()), Response::BAD_REQUEST);
    }

    public function actionUpdate($id, $content)
    {
        $node = Node::model()->findByPk($id);
        if($node) {
            $node->content = $content;
            if($node->save())
                $this->response($node, Response::UPDATED);
            $this->response(array_shift($node->getErrors()), Response::BAD_REQUEST);
        }
        $this->response('Not found node', Response::BAD_REQUEST);
    }

    public function actionRead($id)
    {
        $node = Node::model()->findByPk($id);
        if($node === null)
            $this->response('Not found node', Response::NOT_FOUND);
        $this->response($node);
    }

    public function actionDelete($id)
    {
        if(Node::model()->deleteByPk($id))
        {
            $this->response('Deleted', Response::DELETED);
        }
        $this->response('Not found node', Response::NOT_FOUND);
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
