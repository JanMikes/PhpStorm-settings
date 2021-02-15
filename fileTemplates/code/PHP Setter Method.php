#set($METHOD_NAME = ${NAME})
#set($METHOD_NAME = $METHOD_NAME.substring(0,1).toLowerCase() + $METHOD_NAME.substring(1))
public ${STATIC} function ${METHOD_NAME}(#if (${SCALAR_TYPE_HINT})${SCALAR_TYPE_HINT} #else#end$${PARAM_NAME})
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
#end
}