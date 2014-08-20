<?php

require_once 'Model.php';

class Article extends Model
{
    /** 文章唯一id*/
    public $Id;
    /**图文消息标题 */
    public $Title;
    /** 图文消息描述*/
    public $Description;
    /**图片链接，支持JPG、PNG格式，较好的效果为大图360*200，小图200*200 */
    public $PicUrl;
    /** 点击图文消息跳转链接*/
    public $Url;
    /** 文章类型*/
    public $article_type = 'common';

    public function insert($article)
    {
        $sql = sprintf("INSERT INTO article(title,description,pic_url,url,article_type) VALUES('%s','%s','%s','%s','%s')"
            , $article->Title, $article->Description, $article->PicUrl, $article->Url, $article->article_type);
        return $this->db->query($sql);
    }

    public function update($article)
    {
        if (!$article->Id) {
            return false;
        }
        $sql = sprintf("UPDATE article set title='%s',description='%s',pic_url='%s',url='%s',article_type='%s' WHERE id=%d"
            , $article->Title, $article->Description, $article->PicUrl, $article->Url, $article->article_type, $article->Id);
        return $this->db->query($sql);
    }

    /**
     * delete current id
     */
    public function delete($article)
    {
        if (!$article->Id) {
            return false;
        }
        $sql = sprintf("DELETE FROM article WHERE id=%d", $article->Id);
        return $this->db->query($sql);
    }

    public function getArticle($page, $limit = 10)
    {
        $sql = sprintf("select * from article LIMIT %d OFFSET %d", $limit, ($page - 1) * $limit);
        $res = $this->db->query($sql);
        $arr = array();
        if ($res) {
            foreach ($res as $row) {
                $a = new Article();
                $a->Id = (int)$row['id'];
                $a->Title = $row['title'];
                $a->Description = $row['description'];
                $a->PicUrl = $row['pic_url'];
                $a->Url = $row['url'];
                $a->article_type = $row['article_type'];
                $arr[] = $a;
            }
        }
        return $arr;
    }
}
