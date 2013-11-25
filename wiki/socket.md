###socket原理http://goodcandle.cnblogs.com/archive/2005/12/10/294652.aspx       msgpack_pack  msgpack_unpack

 * socket是应用层与TCP/IP协议族通信的中间软件抽象层，它所一组接口。在设计模式中，socket其实就是一个门面模式，它把复杂的TCP/IP协议隐藏在socket接口的后面，对用户来说，一组简单的接口就算全部，让socket去组织数据，以符合指定的协议。

