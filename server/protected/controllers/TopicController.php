<?php

class TopicController extends Controller
{
    /**
     * 所有话题
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
     * 创建话题
     *
     * uri: /topics
     * method: POST
     *
     * @param integer $nodeId
     * @param string $title
     * @param string $content
     */
    public function actionCreate($nodeId, $title, $content)
    {
        if(!Yii::app()->user->checkAccess('createTopic'))
            $this->response('Permission Denied', Response::BAD_REQUEST);

        $topic = new Topic();
        $topic->setAttributes(array(
            'node_id' => $nodeId,
            'title' => $title,
            'content' => $content,
            'creator_id' => Yii::app()->user->id,
            'created_by' => Yii::app()->user->name,
        ));

        if($topic->save())
            $this->response($topic, Response::CREATED);
        $this->response($topic->getErrorMessage(), Response::BAD_REQUEST);
    }

    /**
     * 更新话题
     *
     * uri: /topic/{id}
     * method: PUT
     *
     * @param integer $id
     * @param string $title
     * @param string $content
     */
    public function actionUpdate($id, $title, $content)
    {
        $topic = Topic::model()->findByPk($id);
        if($topic === null)
            $this->response('Invalid Topic', Response::BAD_REQUEST);
        if(!Yii::app()->user->checkAccess('updateTopic', array('topic' => $topic)))
            $this->response('Permission Denied', Response::BAD_REQUEST);
        $topic->title = $title;
        $topic->content = $content;
        if($topic->save())
            $this->response($topic, Response::UPDATED);
        $this->response($topic->getErrorMessage(), Response::BAD_REQUEST);
    }

    /**
     * 读取一个话题
     *
     * uri: /topic/{id}
     * method: GET
     *
     * @param integer $id
     */
    public function actionRead($id)
    {
        $topic = Topic::model()->findByPk($id);
        if($topic === null)
            $this->response('Invalid Topic', Response::NOT_FOUND);
        $this->response($topic);
    }

    /**
     * 删除一个话题
     *
     * uri: /topic/{id}
     * method: DELETE
     *
     * @param integer $id
     */
    public function actionDelete($id)
    {
        if(!Yii::app()->user->checkAccess('deleteTopic'))
            $this->response('Permission Denied', Response::BAD_REQUEST);
        if(Topic::model()->deleteAllByAttributes(array('id' =>$id, 'creator_id' => Yii::app()->user->id)))
            $this->response('Deleted', Response::DELETED);
        $this->response('Invalid Topic', Response::NOT_FOUND);
    }
}
