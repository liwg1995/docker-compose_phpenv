### 介绍
- `phpenv`包含`docker-compose`的`yml`文件以及各个需要安装的`Dockerfile`文件
- `web`是本地的那些开发的文件，网站内容放在里面
### 注意
- `yml`文件中的一些路径可以更改，相应的`web`文件路径或者名称也得更改
### 必备工具安装
- 安装`docker`
  - 源安装：
```
$ curl -fsSL https://mirrors.aliyun.com/docker-ce/linux/ubuntu/gpg | sudo apt-key add -
$ sudo add-apt-repository \
    "deb [arch=amd64] https://mirrors.aliyun.com/docker-ce/linux/ubuntu \
    $(lsb_release -cs) \
    stable"
$ sudo apt-get update
$ sudo apt-get install docker-ce
```
- 安装`docker-compose`
```
$ pip install -U docker-compose
```
> 如果提示没有`pip`，则需要安装`pip`
```
$ apt-get install python-pip
```
### 使用
- 进入`phpenv`目录下
```
$ docker-compose up -d
```
- 重新构建
```
$ docker-compose up -d --build
```
