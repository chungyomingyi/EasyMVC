
續繼更改mvc架構
# 第二階段 (研發二處) 事項

* MVC 部分
 - (0802OK)Control 負責處理流程 (不echo)
 - 存取資料庫、Session、Cookie 只在 Model 
 - 所有輸出顯示、echo 只在 View

* 要求部分
 - (0801ok)程式碼必需縮排整齊
 - (0801ok)統一使用 `require_once`
 - (0802OK)一個檔案只能定義一個class
 - `require_once` 的檔案只能是 class 或 function 集合 (設定檔除外)
 - (0801ok)SQL 語法使用大寫，欄位、database、table都加入 "\`" 如:  
 
```
SELECT * FROM `table` WHERE `id` = '1'
```
