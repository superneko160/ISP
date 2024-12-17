<?php
/**
 * ISPに反している例
 * 
 * フリマアプリを例にとる
 * 以下の例だと次の問題点がある
 * 1. 各クラスは使用しないメソッドも実装する必要がある
 * 2. 意味のないメソッドの実装を強制されている
 * 3. インターフェースが大きすぎて、柔軟性に欠けている
 */

interface User {
    public function getUser();
    public function buy();
    public function sell();
}

class Buyer implements User {

    public function getUser() {
        // ユーザ情報を取得する処理
    }

    public function buy() {
        //購入処理
    }

    // 本来実装する必要のないメソッド
    public function sell() {
        throw new Exception('購入者は売却できません');
    }
}

class Seller implements User {

    public function getUser() {
        // ユーザ情報を取得する処理
    }

    // 本来実装する必要のないメソッド
    public function buy() {
        throw new Exception('売却者は購入できません');
    }

    public function sell() {
        // 売却処理
    }
}
