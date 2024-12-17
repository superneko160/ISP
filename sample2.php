<?php
/**
 * ISPを守っている例
 * sample1.phpと異なり不要なメソッドを実装しなくて済んでいる
 */

interface User {
    public function getUser();
}

interface Purcase {
    public function buy();
}

interface Sale {
    public function sell();
}

class Buyer implements User, Purcase {

    public function getUser() {
        // ユーザ情報を取得する処理
    }

    public function buy() {
        // 購入処理
    }
}

class Seller implements User, Sale {

    public function getUser() {
        // ユーザ情報を取得する処理
    }

    public function sell() {
        // 売却処理
    }
}
