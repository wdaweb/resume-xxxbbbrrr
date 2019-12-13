# 個人履歷表管理系統


## 視覺功能計劃
  ### 前台
    畫面採用簡潔風格，表格條列式的列出求職履歷的項目內容
      * 個人基本資料 PERSONAL
      * 學歷 EDUCATION
      * 工作經歷 WORK EXPERIENCE
      * 專長技能 SKILL
      * 自傳 AUTOBIOGRAPHY
      * 照片 IMAGES
      * 作品集 PORTFOLIO
      
  ### 後台管理
    採用單一畫面，依使用者點選所需功能後再顯示該功能操作畫面
    讓使用者可以新增、修改、刪除資料，並且選擇是否要在前台畫面顯示
      * 個人基本資料管理
      * 學歷管理
      * 工作經歷管理
      * 專長技能管理
      * 自傳管理
      * 照片管理
      * 作品集管理


## 作品集計劃
    目前是以作品畫面加上網址連結提供，目前主要以視覺作品photoshop及一些php小程式為主
    日後會再增加網站網頁設計及illustrator等相關作品


## 資料庫規劃

  * personal

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |file  |text    |     |         |     | 檔名/路徑 |
    |text  |text    |     |         |     | 姓名      |
    |tel   |text    |     |         |     | 電話      |
    |email |varchar |     |         |     | 郵件信箱   |
    |note  |varchar |     |         |     | 備註      |
    |sh    |int(1)  |     |   0     |     | 顯示      |
    
  * edu

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |file  |text    |     |         |     | 檔名/路徑 |
    |uni   |text    |     |         |     | 學校名稱  |
    |dep   |text    |     |         |     | 科系     |
    |timer |text    |     |         |     | 就讀時間  |
    |sh    |int(1)  |     |   1     |     | 顯示     |

  * work
  
    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |file  |text    |     |         |     | 檔名/路徑 |
    |co    |text    |     |         |     | 公司名稱  |
    |job   |text    |     |         |     | 職稱     |
    |timer |text    |     |         |     | 任職時間  |
    |sh    |int(1)  |     |   1     |     | 顯示     |

  * skill

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |file  |text    |     |         |     | 檔名/路徑 |
    |ski   |text    |     |         |     | 專長類別  |
    |con   |text    |     |         |     | 專長內容  |
    |note  |text    |     |         |     | 備註      |
    |sh    |int(1)  |     |   1     |     | 顯示      |

  * autobiography

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |file  |text    |     |         |     | 檔名/路徑 |
    |text  |text    |     |         |     | 自傳文字內容|
    |sh    |int(1)  |     |   1     |     | 顯示      |

  * image

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |file  |text    |     |         |     | 圖片名稱   |
    |text  |text    |     |         |     | 文字      |
    |sh    |int(1)  |     |   1     |     | 顯示      |

  * admin

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |acc   |text    |     |         |     | 帳  號    |
    |pw    |text    |     |         |     | 密  碼    |

  * portfolio

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |file  |text    |     |         |     | 作品檔名   |  
    |text  |text    |     |         |     | 作品名稱   |
    |href  |text    |     |         |     | 作品連結   |
    |sh    |int(1)  |     |  1      |     | 顯示      |
