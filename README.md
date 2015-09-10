# 占位图使用文档

## API
图片链接:
`http://{domain}/{size}[/{bgColor}[/{color}[/{text}[.{format}]]]]`
或者
`http://{domain}?size={size}[&bgColor={bgColor}][&color={color}][&text={text}][&format={format}]`

## 参数列表
### size
>图片大小
>格式为 NxN 其中N为整数，x为任意非数字字符，例：50x50，50*50，
>当图片长宽相同时，可以只写一个数值，例：50

### bgColor
>*[可选]* 背景颜色
>可以为色值，如：0F0\0D0D0D
>也可以为色彩名称，如red\skyblue，[名称列表](http://www.w3schools.com/cssref/css_colorsfull.asp)
>色值和名称都用不考虑大小写
>默认值：CCCCCC

### color
>*[可选]* 字体颜色
>格式同背景颜色
>默认值：背景色的反色

### text
>*[可选]* 展示的文字
>支持中文
>默认值：图片的大小

### format
>*[可选]* 格式
>取值范围：png/jpg/gif
>默认值：png


## 示例：
### 1. 基本用法

>[http://{domain}/80](http://{domain}/80)
> - ![80x80的占位图](http://{domain}/80)
>
>[http://{domain}/100x50](http://{domain}/100x50)
>![100x50的占位图](http://{domain}/100x50)

### 2. 指定背景色

>[http://{domain}/80/lightblue](http://{domain}/80/lightblue)
>![80x80的占位图，背景为天蓝色](http://{domain}/80/lightblue)
>
>[http://{domain}/100x50/0072e4](http://{domain}/100x50/0072e4)
>![100x50的占位图，背景为蓝色](http://{domain}/100x50/0072e4)

### 3. 指定字体颜色

>[http://{domain}/80/lightblue/navy](http://{domain}/80/lightblue/navy)
>![80x80的占位图，背景为浅蓝色，字体为深蓝色](http://{domain}/80/lightblue/navy)
>
>[http://{domain}/100x50//brown](http://{domain}/100x50//brown)
>![100x50的占位图，字体为棕色](http://{domain}/100x50//brown)

### 4. 指定文字

>[http://{domain}/80/lightblue/navy/75Team](http://{domain}/80/lightblue/navy/75Team)
>![80x80的占位图，背景为浅蓝色，字体为深蓝色，内容为hello world!](http://{domain}/80/lightblue/navy/75Team)
>
>[http://{domain}/100x50///Hello World!](http://{domain}/100x50///Hello World!)
>![100x50的占位图，内容为75Team](http://{domain}/100x50///Hello World!)

### 5. 指定格式

>[http://{domain}/80.png](http://{domain}/80.png)
>![80x80的占位图，格式为png](http://{domain}/80.png)
>
>[http://{domain}/100x50/0072e4.jpg](http://{domain}/100x50/0072e4.jpg)
>![100x50的占位图，背景为蓝色，格式为gif](http://{domain}/100x50/0072e4.gif)

### 6. 以query形式访问

>[http://{domain}?size=80](http://{domain}?size=80)
>![80x80的占位图](http://{domain}?size=80)
>
>[http://{domain}?size=100x50&text=Hello World!](http://{domain}?size=100x50&text=Hello World!)
>![100x50的占位图，内容为75Team](http://{domain}?size=100x50&text=Hello World!)
>
>[http://{domain}?size=80&bgColor=lightblue&color=navy&text=75Team](http://{domain}?size=80&bgColor=lightblue&color=navy&text=75Team)
>![80x80的占位图，背景为浅蓝色，字体为深蓝色，内容为hello world!](http://{domain}?size=80&bgColor=lightblue&color=navy&text=75Team)
>
>*也可以混合使用*
>[http://{domain}/80.png?text=Hello World!](http://{domain}/80.png?text=Hello World!)
>![80x80的占位图，内容为hello world!，格式为png](http://{domain}/80.png?text=Hello World!)
